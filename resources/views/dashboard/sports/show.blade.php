<x-app-layout>
  <x-slot name="header">Manage Sports</x-slot>

  @include('dashboard.sports.clubs.index', [
      'clubs' => $sport->clubs,
  ])

  @include('dashboard.sports.contents.index', [
      'contents' => $sport->contents,
  ])

  @include('dashboard.sports.comments.index', [
      'comments' => $sport->comments,
  ])

  <div x-data="{ id: null, name: '', route: '' }"
    @set-item-id.window="
    id = $event.detail.id;
    name = $event.detail.name;
    route = $event.detail.route;
  ">
    <x-modal name="confirm-item-deletion" focusable>
      <form method="POST" :action="route" class="p-6">
        @csrf
        @method('DELETE')

        <h2 class="text-lg font-semibold text-zinc-900">
          Are you sure you want to delete <span class="font-bold" x-text="name"></span>?
        </h2>
        <p class="mt-2 text-sm text-zinc-600">
          Once the item is deleted, all of its resources and data will be permanently removed. This action cannot be
          undone.
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
