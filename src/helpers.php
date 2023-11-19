<?php
  if (! function_exists('getDefaultBase')) {
      function getDefaultBase()
      {
        return config('skeleton-views.defaultBase') ?: config('hive-display-views.defaultBase');
      }
  }

  if (! function_exists('base_layouts')) {
      function base_layouts()
      {
        return config('skeleton-views.baseLayouts') ?: config('hive-display-views.defaultBase');
      }
  }

  if (! function_exists('base_headers')) {
      function base_headers()
      {
        return config('skeleton-views.baseHeaders') ?: config('hive-display-views.defaultBase');
      }
  }

  if (! function_exists('base_navigations')) {
      function base_navigations()
      {
        return config('skeleton-views.baseNavigations') ?: config('hive-display-views.defaultBase');
      }
  }

  if (! function_exists('base_sidebars')) {
      function base_sidebars()
      {
        return config('skeleton-views.baseSidebars') ?: config('hive-display-views.defaultBase');
      }
  }

  if (! function_exists('base_footers')) {
      function base_footers()
      {
        return config('skeleton-views.baseFooters') ?: config('hive-display-views.defaultBase');
      }
  }

  // if (! function_exists('getLayoutApp')) {
  //     function getLayoutApp()
  //     {
  //       return config('skeleton.layouts.app.default');
  //     }
  // }

  // TABLES CHECK

  if(function_exists('tableUsers')) {
    function tableUsers()
    {
      return config('skeleton.table_names.users');
    }
  }

  if(function_exists('tableLogins')) {
    function tableLogins()
    {
      return config('skeleton.table_names.logins');
    }
  }

  if (! function_exists('has_translations')) {
      function has_translations()
      {
          return config('skeleton-features.hasTranslationFeatures');
      }
  }

  if (! function_exists('lang_route')) {
      function lang_route()
      {
        return config('skeleton.lang_route');
      }
  }

  if (! function_exists('locale_langs')) {
      function locale_langs()
      {
        return config('skeleton.translations');
      }
  }

  if (! function_exists('default_lang')) {
      function default_lang()
      {
        return config('skeleton.default_lang');
      }
  }

  if (! function_exists('hasUserFeatures')) {
    function hasUserFeatures()
    {
        return config('skeleton-features.hasUserFeatures');
    }
  }

  if (! function_exists('hasRegistrationFeatures')) {
    function hasRegistrationFeatures()
    {
        return (
          config('skeleton-features.hasUserFeatures')
          && config('skeleton-features.hasRegistrationFeatures')
        );
    }
  }

  if (! function_exists('hasTermsAndPrivacyPolicyFeatures')) {
    function hasTermsAndPrivacyPolicyFeatures()
    {
        return config('skeleton-features.hasTermsAndPrivacyPolicyFeatures');
    }
  }

  if (! function_exists('hasApiFeatures')) {
    function hasApiFeatures()
    {
        return config('skeleton-features.hasApiFeatures');
    }
  }

  // TEAMS

  if (! function_exists('hasTeamFeatures')) {
    function hasTeamFeatures()
    {
        return config('skeleton-features.hasTeamFeatures');
    }
  }

  if (! function_exists('getDefaultTeamCode')) {
    function getDefaultTeamCode()
    {
        return config('skeleton-features.defaultTeamCode');
    }
  }

  if (! function_exists('getDefaultCommunityCode')) {
    function getDefaultCommunityCode()
    {
        return config('skeleton-features.defaultCommunityCode');
    }
  }

  if (! function_exists('getMainTeamReference')) {
    function getMainTeamReference()
    {
        return config('skeleton-features.mainTeamReference');
    }
  }

  if (! function_exists('getMainCommunityReference')) {
    function getMainCommunityReference()
    {
        return config('skeleton-features.mainCommunityReference');
    }
  }

  if (! function_exists('check_getDefaultTeamReference')) {
    function check_getDefaultTeamReference()
    {
        return config('skeleton-features.defaultTeamReference');
    }
  }

  if (! function_exists('check_getDefaultCommunityReference')) {
    function check_getDefaultCommunityReference()
    {
        return config('skeleton-features.defaultCommunityReference');
    }
  }

  if (! function_exists('hasTeamOwnershipOnCreateFeatures')) {
    function hasTeamOwnershipOnCreateFeatures()
    {
        return config('skeleton-features.hasTeamOwnershipOnCreateFeatures');
    }
  }

  if (! function_exists('hasTeamAppDefaultMembershipFeatures')) {
    function hasTeamAppDefaultMembershipFeatures()
    {
        return config('skeleton-features.hasTeamAppDefaultMembershipFeatures');
    }
  }

  if (! function_exists('hasSubscriptionFeatures')) {
    function hasSubscriptionFeatures()
    {
        return config('skeleton-features.hasSubscriptionFeatures');
    }
  }

  // JETSTREAM AND FORTIFY PROCESSES
         // Views
   if (! function_exists('hasLoginView')) {
     function hasLoginView()
     {
       return view('skeleton::central.auth.login');
     }
   }

   if (! function_exists('hasRegisterView')) {
     function hasRegisterView()
     {
       return view('skeleton::central.auth.register');
     }
   }

   if (! function_exists('hasVerifyEmailView')) {
     function hasVerifyEmailView()
     {
       return view('skeleton::central.auth.verify-email');
     }
   }

   if (! function_exists('hasTwoFactorChallengeView')) {
     function hasTwoFactorChallengeView()
     {
       return view('skeleton::central.auth.two-factor-challenge');
     }
   }

   if (! function_exists('hasRequestPasswordResetLinkView')) {
     function hasRequestPasswordResetLinkView()
     {
       return view('skeleton::central.auth.forgot-password');
     }
   }

   if (! function_exists('hasResetPasswordView')) {
     function hasResetPasswordView()
     {
       return view('skeleton::central.auth.reset-password');
     }
   }

   if (! function_exists('hasConfirmPasswordView')) {
     function hasConfirmPasswordView()
     {
       return view('skeleton::central.auth.confirm-password');
     }
   }

   if (! function_exists('hasCreateNewUserClass')) {
     function hasCreateNewUserClass()
     {
       return VendorName\Skeleton\Actions\SkeletonOnBoardNewUser::class;
     }
   }

   // SUBSCRIPTIONS
   if (! function_exists('hasDefaultSubscriptionPlanPlan')) {
     function hasDefaultSubscriptionPlanPlan()
     {
       return config('skeleton-features.addSubscriptionPlanToNewUser');
     }
   }

   // SETTINGS
   if (! function_exists('hasDefaultSettingsModel')) {
     function hasDefaultSettingsModel()
     {
       return config('skeleton-features.addSubscriptionPlanToNewUser');
     }
   }

   if (! function_exists('hasJetstream')) {
     function hasJetstream()
     {
       return config('skeleton.hasJetstream');
     }
   }

   if (! function_exists('hasNewsletterSubscriptionEmailVerificationRequest')) {
     function hasNewsletterSubscriptionEmailVerificationRequest()
     {
       return config('skeleton-features.emailVerificationRequired');
     }
   }
