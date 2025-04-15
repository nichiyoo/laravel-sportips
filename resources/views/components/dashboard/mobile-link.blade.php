@props([
    'active' => false,
])

@php
  $classes = [
      'active' => ' border-primary-400 ',
      'inactive' => ' border-transparent text-zinc-400 hover:text-zinc-50 ',
  ];

  $classes = $active ? $classes['active'] : $classes['inactive'];
@endphp

<a
  {{ $attributes->merge(['class' => 'block w-full px-7 py-2 border-l-4 focus:outline-none transition duration-150 ease-in-out ' . $classes]) }}>
  {{ $slot }}
</a>
