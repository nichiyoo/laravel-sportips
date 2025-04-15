@props([
    'image' => asset('images/hero.jpg'),
    'title' => 'Sportips',
    'excerpt' => 'Take your first steps into the sporting world with Sportips',
])

<main id="hero" class="h-screen relative">
  <img src="{{ $image }}" alt="Hero Image" class="absolute inset-0 object-cover size-full">
  <div class="absolute inset-0 bg-gradient-to-b from-50% from-black/0 to-black/50"></div>
  <div class="relative container text-zinc-50 grid h-full">
    <x-landing.navbar />
  </div>

  <div class="absolute bottom-16 w-full">
    <div class="container grid items-end xl:grid-cols-3 text-zinc-50 gap-10">
      <div class="xl:col-span-2 flex flex-col items-start gap-4">
        <a href="{{ route('welcome') }}">
          <x-ui.button variant="glass">
            <span>{{ config('app.name') }}</span>
          </x-ui.button>
        </a>

        <h1 class="font-heading text-6xl xl:text-8xl">
          {{ $title }}
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
          {{ $excerpt }}
        </p>
      </div>
    </div>
  </div>
</main>
