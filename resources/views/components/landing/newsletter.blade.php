<div class="p-4">
  <div class="bg-pattern text-white rounded-3xl p-4">
    <div class="grid gap-6 xl:grid-cols-4 items-end">
      <div class="aspect-square overflow-hidden rounded-2xl">
        <img src="{{ asset('images/person.jpg') }}" alt="Newsletter" class="size-full object-cover">
      </div>
      <div class="xl:col-span-3 p-8 flex flex-col items-start gap-4">
        <div class="flex items-center gap-2">
          <a href="{{ route('welcome') }}" class="border bg-glass rounded-full px-6 py-2 font-medium">
            Sportips
          </a>
          <a href="{{ route('dashboard') }}" class="border bg-white text-zinc-900 rounded-full px-6 py-2 font-medium">
            Dashboard
          </a>
        </div>
        <h1 class="font-heading text-6xl">
          Get the Latest Updates, Special Offers,
          and Exclusive Event Invitations!
        </h1>
        <div class="hidden lg:flex relative">
          <input type="email" class="text-sm bg-glass rounded-full px-6 py-3 placeholder:text-zinc-50"
            placeholder="Enter your email" />
          <button type="submit"
            class="size-10 bg-primary-500 absolute right-1 top-1/2 transform -translate-y-1/2 rounded-full flex items-center justify-center">
            <i data-lucide="arrow-up-right"></i>
          </button>
          </input>
        </div>

      </div>
    </div>
  </div>
</div>
