<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-white dark:bg-gray-900">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#fa9a00">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dark flex h-screen">
  <!-- Sidebar -->
  <livewire:layout.aside />
  <!-- End Sidebar -->
  <div class="dark flex flex-col flex-1 overflow-hidden">
    <!-- Navbar -->
    <livewire:layout.navigation />
    <!-- End Navbar -->
    <!-- Main -->
    <livewire:layout.main />
    <!-- End Main -->

    {{-- <livewire:layout.request-tab /> --}}
    {{-- <livewire:layout.tab /> <!-- Il tuo nuovo componente per le tabs --> --}}
    {{-- {{ $slot }} --}}
  </div>
</body>

</html>
