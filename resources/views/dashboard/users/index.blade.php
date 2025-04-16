<x-app-layout>
  <x-slot name="header">Manage Users</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Manage Users</x-slot>
      <x-slot name="description">
        Manage the users, clubs, contents, and comments for your users.
      </x-slot>

      <a href="{{ route('admin.users.create') }}">
        <x-ui.button variant="primary" class="ml-auto">
          <span>Add User</span>
          <i data-lucide="plus"></i>
        </x-ui.button>
      </a>
    </x-ui.header>

    <div class="relative w-full overflow-auto content rounded-xl">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td>
                <div class="flex items-center gap-4">
                  <x-ui.avatar name="{{ $user->name }}" />
                  <span>{{ $user->name }}</span>
                </div>
              </td>
              <td>{{ $user->email }}</td>
              <td>{{ ucfirst($user->role) }}</td>
              <td>
                <div class="flex items-center gap-4">
                  <a href="{{ route('admin.users.edit', $user) }}" class="text-primary-600 hover:underline">
                    Edit
                  </a>
                  <button x-data
                    x-on:click.prevent="
                      $dispatch('open-modal', 'confirm-user-deletion');
                      $dispatch('set-user-id', {
                        id: {{ $user->id }},
                        name: '{{ $user->name }}',
                        route: '{{ route('admin.users.destroy', $user->id) }}'
                      });
                    "
                    class="text-red-600 hover:underline">
                    Delete
                  </button>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <div x-data="{ ud: null, name: '', route: '' }"
    @set-user-id.window="
      ud = $event.detail.id;
      name = $event.detail.name;
      route = $event.detail.route;
    ">
    <x-modal name="confirm-user-deletion" focusable>
      <form method="POST" :action="route" class="p-6">
        @csrf
        @method('DELETE')

        <h2 class="text-lg font-semibold text-zinc-900">
          Are you sure you want to delete <span class="font-bold" x-text="name"></span>?
        </h2>
        <p class="mt-2 text-sm text-zinc-600">
          This action cannot be undone. The user and all of their data will be permanently removed.
        </p>

        <div class="flex justify-end gap-2 mt-6">
          <x-ui.button variant="secondary" type="button" x-on:click="$dispatch('close')">
            Cancel
          </x-ui.button>
          <x-ui.button variant="destructive" type="submit">
            Confirm Delete
          </x-ui.button>
        </div>
      </form>
    </x-modal>
  </div>
</x-app-layout>
