<?php

// config for VendorName/Skeleton
return [
  // app
  'title'             => 'skeleton',
  'slogan'            => 'This is skeleton.',
  'hasJetstream'      => false,
  'appInMaintenance'  => false,
  'appIsComingSoon'   => false,

  // table names
  'table_names'  => [
      'logins'   => 'logins',
      'users'    => 'users',
  ],

  // translations
  'default_lang'      => 'en',
  'lang_route'        => 'lang',
  'translations'      => ['en','fr'],
  'locale_langs'      => [
          'en'          => ['name' => 'English', 'script' => 'Latn', 'native' => 'English', 'regional' => 'en_GB'],
          'fr'          => ['name' => 'French',  'script' => 'Latn', 'native' => 'Français', 'regional' => 'fr_FR'],
  ],
  // colors
  'main_color'        => 'red-800',
  'main_color_h'      => 'red-900',
  'second_color'      => 'yellow-300',
  'color_animation'   => '',
  // teams
  'defaultTeamCode'   => 'default_team',
  // tables
  'table_names'       => [
      'tableOne'   => 'tableOne',
  ],
  // columns
  'column_names'      => [
      'columnOne'     => 'columnOne',
  ],

];
