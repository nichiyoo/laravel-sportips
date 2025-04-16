<div class="grid gap-6 p-8 content rounded-xl ">
  <x-ui.header>
    <x-slot name="title">Manage Contents</x-slot>
    <x-slot name="description">
      Manage the contents for your sports.
    </x-slot>

    <a href="{{ route('admin.sports.contents.create', $sport) }}">
      <x-ui.button variant="primary" class="ml-auto">
        <span>Add Content</span>
        <i data-lucide="plus"></i>
      </x-ui.button>
    </a>
  </x-ui.header>

  <div class="relative w-full overflow-auto content rounded-xl">
    <table class="w-full">
      <thead>
        <tr>
          <th>Title</th>
          <th>Body</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($contents as $content)
          <tr>
            <td>{{ $content->title }}</td>
            <td>{{ $content->body }}</td>
            <td>
              <div class="flex items-center gap-4">
                <a href="{{ route('admin.contents.edit', $content) }}" class="text-primary-600 hover:underline">Edit</a>
                <button x-data
                  x-on:click.prevent="
                      $dispatch('open-modal', 'confirm-item-deletion');
                      $dispatch('set-item-id', {
                          id: {{ $content->id }},
                          title: '{{ $content->title }}',
                          route: '{{ route('admin.contents.destroy', $content) }}'
                      });
                  "
                  class="text-red-600 hover:underline">Delete</button>
              </div>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="3" class="text-center text-gray-500">No contents available</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
