<x-app-layout>
  <x-slot name="header">Update Users</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Update Users</x-slot>
      <x-slot name="description">Update the user</x-slot>
    </x-ui.header>

    @include('dashboard.users.form', [
        'action' => route('admin.users.update', $user),
        'method' => 'PUT',
        'user' => $user,
    ])
  </div>
</x-app-layout>
