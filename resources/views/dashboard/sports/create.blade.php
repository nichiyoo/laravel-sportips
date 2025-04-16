<x-app-layout>
  <x-slot name="header">Create Sports</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Create Sports</x-slot>
      <x-slot name="description">Create a new sport</x-slot>
    </x-ui.header>

    @include('dashboard.sports.form', [
        'action' => route('admin.sports.store'),
        'sport' => null,
    ])
  </div>
</x-app-layout>
