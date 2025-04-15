@props([
    'variant' => 'primary',
])

@php
  $classes = [
      'primary' => 'border-zinc-950 bg-zinc-950 text-zinc-50 hover:bg-zinc-900',
      'secondary' => 'border-zinc-200 bg-zinc-100 text-zinc-900 hover:bg-zinc-200',
      'accent' => 'border-primary-500 bg-primary-600 text-zinc-50 hover:bg-primary-500',
      'destructive' => 'border-red-500 bg-red-600 text-zinc-50 hover:bg-red-500',
      'glass' => 'border-zinc-100/10 bg-glass text-zinc-50 hover:bg-zinc-100/20',
  ];

  $class = $classes[$variant] ?? $classes['primary'];
@endphp

<button
  {{ $attributes->merge([
      'type' => 'submit',
      'class' => "border rounded-full px-6 py-3 text-sm font-medium {$class} flex items-center gap-2 focus:outline-none transition ease-in-out duration-150",
  ]) }}>
  {{ $slot }}
</button>
