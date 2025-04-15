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

<body class="font-sans antialiased">
  <div id="hero" class="h-screen relative">
    <img src="{{ asset('images/hero.jpg') }}" alt="Hero Image" class="absolute inset-0 object-cover w-full h-full">
    <div class="absolute inset-0 bg-gradient-to-b from-black/0 to-black/50"></div>

    <div class="relative container text-zinc-50 grid h-full">
      <x-landing.navbar />
    </div>

    <div class="absolute bottom-16 w-full">
      <div class="container grid items-end xl:grid-cols-3 text-zinc-50 gap-10">
        <div class="xl:col-span-2 flex flex-col items-start gap-4">
          <a href="{{ route('welcome') }}" class="border bg-glass rounded-full px-6 py-2 font-medium">
            Sportips
          </a>
          <h1 class="font-heading text-6xl xl:text-8xl">
            Take your first steps into the sporting world with Sportips
          </h1>
        </div>

        <div class="flex flex-col items-start gap-2">
          <div class="p-2 bg-glass rounded-full">
            <div class="flex items-center">
              <x-ui.avatar name="Adam Smith" />
              <x-ui.avatar name="Brenda Lee" class="-ml-2" />
              <x-ui.avatar name="Charlie Brown" class="-ml-2" />
            </div>
          </div>

          <p class="px-2">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo, laudantium atque recusandae harum dolore
            hic! Nihil voluptas unde esse possimus.
          </p>
        </div>
      </div>
    </div>
</body>

</html>
