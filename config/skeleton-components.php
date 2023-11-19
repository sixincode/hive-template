<?php

use VendorName\Skeleton\Components as Components;
use VendorName\Skeleton\Http\Livewire   as Livewires;

// config for VendorName/Skeleton Components
return [
    'blade' => [
      // 'component'   => Components\Component::class,
      'central-landing-top'      => Components\Central\Landing\TopLanding::class,
      'central-landing-two'      => Components\Central\Landing\TwoLanding::class,
      'central-landing-three'    => Components\Central\Landing\ThreeLanding::class,
      'central-landing-four'     => Components\Central\Landing\FourLanding::class,
      'central-landing-five'     => Components\Central\Landing\FiveLanding::class,

      'central-about-top'        => Components\Central\About\TopAbout::class,
      'central-about-two'        => Components\Central\About\TwoAbout::class,
      'central-about-three'      => Components\Central\About\ThreeAbout::class,

      'central-blog-top'         => Components\Central\Blog\TopBlog::class,
      'central-blog-two'         => Components\Central\Blog\TwoBlog::class,
      'central-blog-three'       => Components\Central\Blog\ThreeBlog::class,

      'central-contact-top'      => Components\Central\Contact\TopContact::class,
      'central-contact-two'      => Components\Central\Contact\TwoContact::class,
      'central-contact-three'    => Components\Central\Contact\ThreeContact::class,


      'user-home-top'            => Components\User\Home\TopHome::class,
      'user-home-two'            => Components\User\Home\TwoHome::class,
      'user-home-three'          => Components\User\Home\ThreeHome::class,

      'user-settings-top'        => Components\User\Settings\TopSettings::class,
      'user-settings-two'        => Components\User\Settings\TwoSettings::class,
      'user-settings-three'      => Components\User\Settings\ThreeSettings::class,

      // 'admin-panels-top'            => Components\Admin\Panels\TopPanels::class,
      // 'admin-panels-two'            => Components\Admin\Panels\TwoPanels::class,
      // 'admin-panels-three'          => Components\Admin\Panels\ThreePanels::class,
      //
      // 'admin-controls-top'        => Components\Admin\Controls\TopControls::class,
      // 'admin-controls-two'        => Components\Admin\Controls\TwoControls::class,
      // 'admin-controls-three'      => Components\Admin\Controls\ThreeControls::class,

    ],
    'livewire' => [
      // 'component'   => Livewires\Component::class,
      'central-landing-main'   => Livewires\Central\Landing\MainLanding::class,
      'central-about-main'     => Livewires\Central\About\MainAbout::class,
      'central-blog-main'      => Livewires\Central\Blog\MainBlog::class,
      'central-contact-main'   => Livewires\Central\Contact\MainContact::class,
      //
      'user-home-main'         => Livewires\User\Home\UserHome::class,
      'user-settings-main'     => Livewires\User\Settings\UserSettings::class,
      //
      // 'admin-panels-main'      => Livewires\Admin\Panels\AdminPanels::class,
      // 'admin-controls-main'    => Livewires\Admin\Controls\AdminControls::class,
    ],
    'prefix' => 'skeleton',
];
