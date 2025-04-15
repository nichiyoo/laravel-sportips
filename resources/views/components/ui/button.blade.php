@props([
    'variant' => 'primary',
])

@php
  $classes = [
      'primary' => 'bg-zinc-950 text-zinc-50 hover:bg-zinc-900',
      'secondary' => 'bg-zinc-100 text-zinc-900 hover:bg-zinc-200',
      'accent' => 'bg-primary-600 text-zinc-50 hover:bg-primary-500',
      'destructive' => 'bg-red-600 text-zinc-50 hover:bg-red-500',
  ];

  $class = $classes[$variant] ?? $classes['primary'];
@endphp

<button
  {{ $attributes->merge([
      'type' => 'submit',
      'class' => "rounded-full px-6 py-3 text-sm font-medium {$class} flex items-center border-zinc-950 gap-2 focus:outline-none transition ease-in-out duration-150",
  ]) }}>
  {{ $slot }}
</button>
