<x-landing-layout>
  <div id="hero" class="h-screen relative">
    <img src="{{ asset('images/person.jpg') }}" alt="Hero Image" class="absolute inset-0 object-cover w-full h-full">
    <div class="absolute inset-0 bg-gradient-to-b from-50% from-black/0 to-black/50"></div>

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
            Master the Basics: Your First Game Plan
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
            Ready to dive into a new sport but don&apos;t know where to start? In this article, we break down the
            fundamentals, making it easy for beginners to step onto the field, court, or track with confidence
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="min-h-screen py-20 grid items-center container">
    <x-course-grid />
  </div>
</x-landing-layout>
