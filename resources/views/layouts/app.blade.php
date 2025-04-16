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

<body class="min-h-screen font-sans antialiased bg-zinc-100">
  <x-dashboard.navbar />

  @isset($header)
    <header class="border-b bg-zinc-950 text-zinc-50 border-zinc-100">
      <div class="container py-6 max-w-7xl">
        <h2 class="text-xl">{{ $header }}</h2>
      </div>
    </header>
  @endisset

  <main class="container grid gap-8 py-12 max-w-7xl">
    <x-ui.status class="mb-4" :status="session('success')" />
    <x-ui.status class="mb-4" :status="session('error')" />

    {{ $slot }}
  </main>
</body>

</html>
