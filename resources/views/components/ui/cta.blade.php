@props(['type' => 'primary'])

<button {{ $attributes->merge(['type' => 'button']) }}
  class="bg-zinc-950 text-zinc-50 rounded-full px-6 py-3 text-sm font-medium hover:bg-zinc-900 flex items-center border-zinc-950 gap-2 focus:outline-none transition ease-in-out duration-150">
  {{ $slot }}
</button>
