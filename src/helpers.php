<?php
  // if (! function_exists('base_components')) {
  //     function base_components()
  //     {
  //       return 'skeleton::components';
  //     }
  // }
  //
  // if (! function_exists('base_layouts')) {
  //     function base_layouts()
  //     {
  //       return 'skeleton::components';
  //     }
  // }
  //
  // if (! function_exists('base_headers')) {
  //     function base_headers()
  //     {
  //       return 'skeleton::components';
  //     }
  // }
  //
  // if (! function_exists('base_navigations')) {
  //     function base_navigations()
  //     {
  //       return 'skeleton::components';
  //     }
  // }
  //
  // if (! function_exists('base_sidebars')) {
  //     function base_sidebars()
  //     {
  //       return 'skeleton::components';
  //     }
  // }
  //
  // if (! function_exists('base_footers')) {
  //     function base_footers()
  //     {
  //         return 'skeleton::components';
  //     }
  // }
  //
  if (! function_exists('have_translations')) {
      function have_translations()
      {
          return config('skeleton.use_translations');
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
