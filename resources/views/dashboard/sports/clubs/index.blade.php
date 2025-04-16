<div class="grid gap-6 p-8 content rounded-xl">
  <x-ui.header>
    <x-slot name="title">Manage Clubs</x-slot>
    <x-slot name="description">
      Manage the clubs for your sports.
    </x-slot>

    <a href="{{ route('admin.sports.clubs.create', $sport) }}">
      <x-ui.button variant="primary" class="ml-auto">
        <span>Add Club</span>
        <i data-lucide="plus"></i>
      </x-ui.button>
    </a>
  </x-ui.header>

  <div class="relative w-full overflow-auto content rounded-xl">
    <table class="w-full">
      <thead>
        <tr>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($clubs as $club)
          <tr>
            <td>{{ $club->name }}</td>
            <td>{{ $club->phone }}</td>
            <td>{{ $club->email }}</td>
            <td>
              <div class="flex items-center gap-4">
                <a href="{{ route('admin.clubs.edit', $club) }}" class="text-primary-600 hover:underline">Edit</a>
                <button x-data
                  x-on:click.prevent="
                    $dispatch('open-modal', 'confirm-item-deletion');
                    $dispatch('set-item-id', {
                        id: {{ $club->id }},
                        name: '{{ $club->name }}',
                        route: '{{ route('admin.clubs.destroy', $club) }}'
                    });
                  "
                  class="text-red-600 hover:underline">Delete</button>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="4" class="text-center text-gray-500">No clubs available</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
