<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=chakra-petch:400,500,700|instrument-sans:400,500,700" rel="stylesheet" />

  <!-- Resources -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('styles')
</head>

<body class="font-sans antialiased bg-zinc-200">
  <div class="min-h-screen">
    {{ $slot }}
  </div>

  <x-landing.footer />
  @stack('scripts')
</body>

</html>
