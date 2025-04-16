<x-app-layout>
  <x-slot name="header">Create Users</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Create Users</x-slot>
      <x-slot name="description">Create a new user</x-slot>
    </x-ui.header>

    @include('dashboard.users.form', [
        'action' => route('admin.users.store'),
        'user' => null,
    ])
  </div>
</x-app-layout>
