<x-app-layout>
  <x-slot name="header">Update Comments</x-slot>

  <div class="grid gap-6 p-8 content rounded-xl ">
    <x-ui.header>
      <x-slot name="title">Update Comments</x-slot>
      <x-slot name="description">Update the comment</x-slot>
    </x-ui.header>

    @include('dashboard.sports.comments.form', [
        'action' => route('admin.comments.update', $comment),
        'method' => 'PUT',
        'comment' => $comment,
        'users' => $users,
    ])
  </div>
</x-app-layout>
