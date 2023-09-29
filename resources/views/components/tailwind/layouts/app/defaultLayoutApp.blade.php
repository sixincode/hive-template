<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('skeleton.title') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/t316.css')}}">

        <!-- Styles -->
        @livewireStyles
        @stack('styles')

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.9.0/cdn.min.js" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body
        id="app"
        class="font-inter antialiased bg-white text-slate-600"
        :class="{ 'sidebar-expanded': sidebarExpanded }"
        x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
    >
          <script>
              if (localStorage.getItem('sidebar-expanded') == 'true') {
                  document.querySelector('body').classList.add('sidebar-expanded');
              } else {
                  document.querySelector('body').classList.remove('sidebar-expanded');
              }
          </script>
          <!-- Page wrapper -->
          <div class="flex h-screen overflow-hidden">
              <!-- sidebar -->
              <x-hive-display-sidebar-app />
              <!-- Content area -->
              <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden @if($attributes['background']){{ $attributes['background'] }}@endif" x-ref="contentarea">
                <!-- header -->
                <x-hive-display-header-app />
                <main>
                  {{ $slot }}
                </main>
                <x-hive-display-footer-app />
              </div>
          </div>
          @stack('modals')
          @livewireScripts
          @stack('scripts')
  </body>
</html>
