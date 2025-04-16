<x-app-layout>
  <x-slot name="header">Create Comment</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Create Comment</x-slot>
      <x-slot name="description">Create a new comment</x-slot>
    </x-ui.header>

    @include('dashboard.sports.comments.form', [
        'action' => route('admin.sports.comments.store', $sport),
        'comment' => null,
        'users' => $users,
    ])
  </div>
</x-app-layout>
