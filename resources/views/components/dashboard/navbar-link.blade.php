@props([
    'active' => false,
])

@php
  $classes = [
      'active' => ' border-primary-400 text-zinc-50',
      'inactive' => ' border-transparent text-zinc-500 hover:text-zinc-50',
  ];

  $classes = $active ? $classes['active'] : $classes['inactive'];
@endphp

<a
  {{ $attributes->merge(['class' => 'inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 focus:outline-none transition duration-150 ease-in-out ' . $classes]) }}>
  {{ $slot }}
</a>
