<?php
  if (! function_exists('base_components') && config('skeleton-features.base_components')) {
      function base_components()
      {
        return 'skeleton::components';
      }
  }

  if (! function_exists('base_layouts') && config('skeleton-features.base_layouts')) {
      function base_layouts()
      {
        return 'skeleton::components';
      }
  }

  if (! function_exists('base_headers') && config('skeleton-features.base_headers')) {
      function base_headers()
      {
        return 'skeleton::components';
      }
  }

  if (! function_exists('base_navigations') && config('skeleton-features.base_navigations')) {
      function base_navigations()
      {
        return 'skeleton::components';
      }
  }

  if (! function_exists('base_sidebars') && config('skeleton-features.base_sidebars')) {
      function base_sidebars()
      {
        return 'skeleton::components';
      }
  }

  if (! function_exists('base_footers') && config('skeleton-features.base_footers')) {
      function base_footers()
      {
          return 'skeleton::components';
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
        return config('skeleton.locale_langs');
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

  if (! function_exists('hasTeamFeatures')) {
    function hasTeamFeatures()
    {
        return config('skeleton-features.hasTeamFeatures');
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
   if (! function_exists('hasLoginView') && config('skeleton-features.hasLoginView')) {
     function hasLoginView()
     {
       return view('skeleton::central.auth.login');
     }
   }

   if (! function_exists('hasRegisterView') && config('skeleton-features.hasRegisterView')) {
     function hasRegisterView()
     {
       return view('skeleton::central.auth.register');
     }
   }

   if (! function_exists('hasVerifyEmailView') && config('skeleton-features.hasVerifyEmailView')) {
     function hasVerifyEmailView()
     {
       return view('skeleton::central.auth.verify-email');
     }
   }

   if (! function_exists('hasTwoFactorChallengeView') && config('skeleton-features.hasTwoFactorChallengeView')) {
     function hasTwoFactorChallengeView()
     {
       return view('skeleton::central.auth.two-factor-challenge');
     }
   }

   if (! function_exists('hasRequestPasswordResetLinkView') && config('skeleton-features.hasRequestPasswordResetLinkView')) {
     function hasRequestPasswordResetLinkView()
     {
       return view('skeleton::central.auth.forgot-password');
     }
   }

   if (! function_exists('hasResetPasswordView') && config('skeleton-features.hasResetPasswordView')) {
     function hasResetPasswordView()
     {
       return view('skeleton::central.auth.reset-password');
     }
   }

   if (! function_exists('hasConfirmPasswordView') && config('skeleton-features.hasConfirmPasswordView')) {
     function hasConfirmPasswordView()
     {
       return view('skeleton::central.auth.confirm-password');
     }
   }

   if (! function_exists('hasCreateNewUserClas') && config('skeleton-features.hasCreateNewUserClas')) {
     function hasCreateNewUserClas()
     {
       return VendorName\Skeleton\Actions\SkeletonOnBoardNewUser::class;
     }
   }
