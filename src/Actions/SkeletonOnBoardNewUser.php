<?php

namespace VendorName\Skeleton\Actions;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Validation\Rule;

class SkeletonOnBoardNewUser implements CreatesNewUsers
{
  use PasswordValidationRules;

  /**
   * Validate and create a newly registered user.
   *
   * @param  array<string, string>  $input
   */
  public function create(array $input): User
  {
      Validator::make($input, [
          'name'       => ['required_without:first_name,last_name', 'string', 'max:255'],
          'username'   => ['string', 'max:255', 'unique:users'],
          'first_name' => ['required_without:name', 'string', 'max:255', 'min:2'],
          'last_name'  => ['required_without:name', 'string', 'max:255','min:2'],
          'email'      => ['required','string','email','max:255', Rule::unique(User::class),],
          'password'   => $this->passwordRules(),
          'terms'      => check_hasTermsAndPrivacyPolicyFeatures() ? ['accepted', 'required'] : '',
      ])->validate();

      return DB::transaction(function () use ($input) {
          return tap(User::create([
              'first_name' => $input['first_name'],
              'last_name'  => $input['last_name'],
              'email' => $input['email'],
              'password' => Hash::make($input['password']),
          ]), function (User $user) {
            if(check_hasTeamFeatures()){
              $this->createTeam($user);
            }
          });
      });
  }

  /**
   * Check team seetings to apply behaviour.
   */
  protected function getBehaviour($user)
  {
    if(check_hasTeamOwnershipOnCreateFeatures()){
       $this->createTeam($user);
    }
    if(check_hasTeamAppDefaultMembershipFeatures()){
       $this->addToDefaultTeam($user);
    }
  }

  /**
   * Create a personal team for the user.
   */
  protected function createTeam(User $user): void
  {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => $user->username,
            'personal_team' => true,
        ]));
  }

  /**
   * Add user to default App Team.
   */
  protected function addToDefaultTeam(User $user): void
  {
        $defaultTeam =
        Team::firstOrCreate([
          'code' => config('skeleton.defaultTeamCode'),
          'personal_team' => false,
          ]);
        $defaultTeam->users()->attach($user);
  }
}
