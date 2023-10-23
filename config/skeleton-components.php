<?php

use VendorName\Skeleton\Components as SkeletonComponents;
use VendorName\Skeleton\Http\Livewire   as SkeletonLivewire;

// config for VendorName/Skeleton Components
return [
    'blade' => [
      // 'component'   => SkeletonComponents\Component::class,
      'central-landing-top'      => SkeletonComponents\Central\Landing\TopLanding::class,
      'central-landing-two'      => SkeletonComponents\Central\Landing\TwoLanding::class,
      'central-landing-three'    => SkeletonComponents\Central\Landing\ThreeLanding::class,
      'central-landing-four'     => SkeletonComponents\Central\Landing\FourLanding::class,
      'central-landing-five'     => SkeletonComponents\Central\Landing\FiveLanding::class,

      'central-about-top'        => SkeletonComponents\Central\About\TopAbout::class,
      'central-about-two'        => SkeletonComponents\Central\About\TwoAbout::class,
      'central-about-three'      => SkeletonComponents\Central\About\ThreeAbout::class,

      'central-blog-top'         => SkeletonComponents\Central\Blog\TopBlog::class,
      'central-blog-two'         => SkeletonComponents\Central\Blog\TwoBlog::class,
      'central-blog-three'       => SkeletonComponents\Central\Blog\ThreeBlog::class,

      'central-contact-top'      => SkeletonComponents\Central\Contact\TopContact::class,
      'central-contact-two'      => SkeletonComponents\Central\Contact\TwoContact::class,
      'central-contact-three'    => SkeletonComponents\Central\Contact\ThreeContact::class,


      'user-home-top'            => SkeletonComponents\User\Home\TopHome::class,
      'user-home-two'            => SkeletonComponents\User\Home\TwoHome::class,
      'user-home-three'          => SkeletonComponents\User\Home\ThreeHome::class,

      'user-settings-top'        => SkeletonComponents\User\Settings\TopSettings::class,
      'user-settings-two'        => SkeletonComponents\User\Settings\TwoSettings::class,
      'user-settings-three'      => SkeletonComponents\User\Settings\ThreeSettings::class,

      // 'admin-panels-top'            => SkeletonComponents\Admin\Panels\TopPanels::class,
      // 'admin-panels-two'            => SkeletonComponents\Admin\Panels\TwoPanels::class,
      // 'admin-panels-three'          => SkeletonComponents\Admin\Panels\ThreePanels::class,
      //
      // 'admin-controls-top'        => SkeletonComponents\Admin\Controls\TopControls::class,
      // 'admin-controls-two'        => SkeletonComponents\Admin\Controls\TwoControls::class,
      // 'admin-controls-three'      => SkeletonComponents\Admin\Controls\ThreeControls::class,

    ],
    'livewire' => [
      // 'component'   => SkeletonLivewire\Component::class,
      'central-landing-main'   => SkeletonLivewire\Central\Landing\MainLanding::class,
      'central-about-main'     => SkeletonLivewire\Central\About\MainAbout::class,
      'central-blog-main'      => SkeletonLivewire\Central\Blog\MainBlog::class,
      'central-contact-main'   => SkeletonLivewire\Central\Contact\MainContact::class,
      //
      'user-home-main'         => SkeletonLivewire\User\Home\UserHome::class,
      'user-settings-main'     => SkeletonLivewire\User\Settings\UserSettings::class,
      //
      // 'admin-panels-main'      => SkeletonLivewire\Admin\Panels\AdminPanels::class,
      // 'admin-controls-main'    => SkeletonLivewire\Admin\Controls\AdminControls::class,
    ],
    'prefix' => 'skeleton',
];
