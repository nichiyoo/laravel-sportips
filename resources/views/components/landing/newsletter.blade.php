<section class="bg-pattern text-white rounded-3xl p-4 relative">
  <div class="grid gap-6 xl:grid-cols-4 items-end">

    <div class="aspect-square overflow-hidden rounded-2xl">
      <img src="{{ asset('images/person.jpg') }}" alt="Newsletter" class="size-full object-cover">
    </div>

    <div class="absolute top-0 right-0 m-8">
      <a href="{{ route('dashboard') }}">
        <x-ui.button variant="secondary">
          <span>Dashboard</span>
          <i data-lucide="arrow-up-right"></i>
        </x-ui.button>
      </a>
    </div>

    <div class="xl:col-span-3 p-8 flex flex-col items-start gap-4">
      <h1 class="font-heading text-6xl">
        Get the Latest Updates, Special Offers,
        and Exclusive Event Invitations!
      </h1>

      <div class="relative">
        <input type="email" class="text-sm bg-glass rounded-full px-6 py-3 placeholder:text-zinc-50"
          placeholder="Enter your email" />
        <button type="submit"
          class="size-10 bg-primary-500 absolute right-1 top-1/2 transform -translate-y-1/2 rounded-full flex items-center justify-center">
          <i data-lucide="send-horizontal"></i>
        </button>
        </input>
      </div>
    </div>
  </div>
</section>
