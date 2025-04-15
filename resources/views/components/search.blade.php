<div {{ $attributes->merge(['class' => 'relative']) }}>
  <input type="text" class="text-sm bg-glass rounded-full px-6 py-3 placeholder:text-zinc-50"
    placeholder="Search here" />
  <button type="submit"
    class="size-10 bg-primary-500 absolute right-1 top-1/2 transform -translate-y-1/2 rounded-full flex items-center justify-center">
    <i data-lucide="search"></i>
  </button>
</div>
