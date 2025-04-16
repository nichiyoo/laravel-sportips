<x-app-layout>
  <x-slot name="header">Dashboard</x-slot>

  <div class="grid gap-8 xl:grid-cols-4">
    <div class="p-8 content rounded-xl">
      <h2 class="font-semibold">Total Users</h2>
      <p class="text-4xl font-bold">{{ $user_count }}</p>
    </div>

    <div class="p-8 content rounded-xl">
      <h2 class="font-semibold">Total Sports</h2>
      <p class="text-4xl font-bold">{{ $sport_count }}</p>
    </div>

    <div class="p-8 content rounded-xl">
      <h2 class="font-semibold">Total Clubs</h2>
      <p class="text-4xl font-bold">{{ $club_count }}</p>
    </div>

    <div class="p-8 content rounded-xl">
      <h2 class="font-semibold">Total Comments</h2>
      <p class="text-4xl font-bold">{{ $comment_count }}</p>
    </div>
  </div>

  <div class="p-8 content rounded-xl">
    You're logged in!
  </div>
</x-app-layout>
