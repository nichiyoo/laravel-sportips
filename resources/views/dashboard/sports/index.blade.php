<x-app-layout>
  <x-slot name="header">Manage Sports</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Manage Sports</x-slot>
      <x-slot name="description">
        Manage the sports, clubs, contents, and comments for your sports.
      </x-slot>

      <a href="{{ route('admin.sports.create') }}">
        <x-ui.button variant="primary" class="ml-auto">
          <span>Add Sport</span>
          <i data-lucide="plus"></i>
        </x-ui.button>
      </a>
    </x-ui.header>

    <div class="relative w-full overflow-auto content rounded-xl">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Like Count</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sports as $sport)
            <tr>
              <td>
                <a href="{{ route('admin.sports.show', $sport) }}" class="flex items-center gap-4 group">
                  <img src="{{ $sport->image }}" alt="{{ $sport->name }}" class="object-cover size-12 rounded-xl" />
                  <span class="text-primary-600 group-hover:underline">{{ $sport->name }}</span>
                </a>
              </td>
              <td>{{ $sport->description }}</td>
              <td>{{ $sport->users_count }}</td>
              <td>
                <div class="flex items-center gap-4">
                  <a href="{{ route('admin.sports.edit', $sport) }}" class="text-primary-600 hover:underline">
                    <span>Edit</span>
                  </a>
                  <button x-data
                    x-on:click.prevent="
                    $dispatch('open-modal', 'confirm-sport-deletion');
                    $dispatch('set-sport-id', {
                      id: {{ $sport->id }},
                      name: '{{ $sport->name }}',
                      route: '{{ route('admin.sports.destroy', $sport->id) }}'
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
    @set-sport-id.window="
        ud = $event.detail.id;
        name = $event.detail.name;
        route = $event.detail.route;
    ">
    <x-modal name="confirm-sport-deletion" focusable>
      <form method="POST" :action="route" class="p-6">
        @csrf
        @method('DELETE')

        <h2 class="text-lg font-semibold text-zinc-900">
          Are you sure you want to delete <span class="font-bold" x-text="name"></span>?
        </h2>
        <p class="mt-2 text-sm text-zinc-600">
          This action cannot be undone. The sport and all of its data will be permanently removed.
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
