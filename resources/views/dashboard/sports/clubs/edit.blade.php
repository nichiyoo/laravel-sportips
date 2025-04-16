<x-app-layout>
  <x-slot name="header">Update Clubs</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Update Clubs</x-slot>
      <x-slot name="description">Update the club</x-slot>
    </x-ui.header>

    @include('dashboard.sports.clubs.form', [
        'action' => route('admin.clubs.update', $club),
        'method' => 'PUT',
        'club' => $club,
    ])
  </div>
</x-app-layout>
