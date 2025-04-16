<x-app-layout>
  <x-slot name="header">Update Contents</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Update Contents</x-slot>
      <x-slot name="description">Update the content</x-slot>
    </x-ui.header>

    @include('dashboard.sports.contents.form', [
        'action' => route('admin.contents.update', $content),
        'method' => 'PUT',
        'content' => $content,
    ])
  </div>
</x-app-layout>
