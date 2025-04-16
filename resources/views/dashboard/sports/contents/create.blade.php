<x-app-layout>
  <x-slot name="header">Create Content</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Create Content</x-slot>
      <x-slot name="description">Create a new content</x-slot>
    </x-ui.header>

    @include('dashboard.sports.contents.form', [
        'action' => route('admin.sports.contents.store', $sport),
        'content' => null,
    ])
  </div>
</x-app-layout>
