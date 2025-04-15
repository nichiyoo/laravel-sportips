<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=chakra-petch:400,500,700|inter:400,500,600,700" rel="stylesheet" />

  <!-- Resources -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @stack('styles')
</head>

<body class="font-sans antialiased">
  <div class="h-screen grid relative xl:grid-cols-2">
    <div class="absolute top-0 left-0 m-6">
      <a href="{{ route('welcome') }}" class="xl:text-zinc-50">
        <x-ui.logo />
      </a>
    </div>

    <div class="h-full hidden xl:block bg-pattern"></div>
    <div class="h-full flex flex-col justify-center w-full container max-w-lg mx-auto gap-8">
      {{ $slot }}
    </div>
  </div>
</body>

</html>
