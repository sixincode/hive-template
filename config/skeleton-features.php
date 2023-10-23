<?php

return [
  'hasUserFeatures'                  => false,
  'hasRegistrationFeatures'          => false,
  'hasApiFeatures'                   => false,
  'hasTermsAndPrivacyPolicyFeatures' => false,
  'hasTeamFeatures'                  => false,
  'hasTeamOwnershipOnCreateFeatures' => true,
  'hasTeamAppDefaultMembershipFeatures' => false,
  'hasSubscriptionFeatures'          => false,
  'addSubscriptionPlanToNewUser'     => false,
  'hasTranslationFeatures'           => true,
  'addSubscriptionPlanToNewUser'     => false,


        // Use 'skeleton::components' as base for following components:
  'base_components'                  => true,
  'base_layouts'                     => true,
  'base_headers'                     => true,
  'base_navigations'                 => true,
  'base_sidebars'                    => true,
  'base_footers'                     => true,

        // Allow following features:

        // Allow following views:
  'hasLoginView'                     => false,
  'hasRegisterView'                  => false,
  'hasVerifyEmailView'               => false,
  'hasTwoFactorChallengeView'        => false,
  'hasRequestPasswordResetLinkView'  => false,
  'hasResetPasswordView'             => false,
  'hasConfirmPasswordView'           => false,
  'hasCreateNewUserClas'             => false,
];
