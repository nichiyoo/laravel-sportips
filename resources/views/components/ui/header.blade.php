<header>
  <div class="flex items-center justify-between">
    <div class="flex flex-col">
      <h2 class="text-xl font-semibold tracking-tight">
        {{ $title }}
      </h2>
      <p class="text-sm text-zinc-600">
        {{ $description }}
      </p>
    </div>

    <div class="flex-none">
      {{ $slot }}
    </div>
  </div>
</header>
