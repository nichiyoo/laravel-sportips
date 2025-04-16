<x-app-layout>
  <x-slot name="header">Create Club</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Create Club</x-slot>
      <x-slot name="description">Create a new club</x-slot>
    </x-ui.header>

    @include('dashboard.sports.clubs.form', [
        'action' => route('admin.sports.clubs.store', $sport),
        'club' => null,
    ])
  </div>
</x-app-layout>
