<x-app-layout>
  <x-slot name="header">Update Sports</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Update Sports</x-slot>
      <x-slot name="description">Update the sport</x-slot>
    </x-ui.header>

    @include('dashboard.sports.form', [
        'action' => route('admin.sports.update', $sport),
        'method' => 'PUT',
        'sport' => $sport,
    ])
  </div>
</x-app-layout>
