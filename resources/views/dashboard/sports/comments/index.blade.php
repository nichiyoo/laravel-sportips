<div class="grid gap-6 p-8 content rounded-xl">
  <x-ui.header>
    <x-slot name="title">Manage Comments</x-slot>
    <x-slot name="description">
      Manage the comments for your sports.
    </x-slot>

    <a href="{{ route('admin.sports.comments.create', $sport) }}">
      <x-ui.button variant="primary" class="ml-auto">
        <span>Add Comment</span>
        <i data-lucide="plus"></i>
      </x-ui.button>
    </a>
  </x-ui.header>

  <div class="relative w-full overflow-auto content rounded-xl">
    <table class="w-full">
      <thead>
        <tr>
          <th>User</th>
          <th>Body</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($comments as $comment)
          <tr>
            <td>{{ $comment->user->name }}</td>
            <td>{{ $comment->body }}</td>
            <td>
              <div class="flex items-center gap-4">
                <a href="{{ route('admin.comments.edit', $comment) }}" class="text-primary-600 hover:underline">Edit</a>
                <button x-data
                  x-on:click.prevent="
                      $dispatch('open-modal', 'confirm-item-deletion');
                      $dispatch('set-item-id', {
                          id: {{ $comment->id }},
                          body: '{{ $comment->body }}',
                          route: '{{ route('admin.comments.destroy', $comment) }}'
                      });
                  "
                  class="text-red-600 hover:underline">Delete</button>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="3" class="text-center text-gray-500">No comments available</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
