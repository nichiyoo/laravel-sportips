<x-landing-layout>
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
  </div>

  <div class="py-20 container">
    <header class="items-center text-center max-w-3xl mx-auto flex flex-col gap-2">
      <h2 class="text-4xl font-semibold font-heading">
        Master the Basics
      </h2>
      <p class="text-zinc-600">
        In this article, we break down the fundamentals, making it easy for beginners to step onto the field, court, or
        track with confidence.
      </p>
    </header>
  </div>
</x-landing-layout>
