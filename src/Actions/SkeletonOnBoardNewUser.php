<?php

namespace VendorName\Skeleton\Actions;

use App\Models\User;
use App\Actions\Fortify\PasswordValidationRules;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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

      return User::create([
          // 'name'       => $input['name'],
          'first_name' => $input['first_name'],
          'last_name'  => $input['last_name'],
          'email'      => $input['email'],
          'password'   => Hash::make($input['password']),
      ]);
  }
}
