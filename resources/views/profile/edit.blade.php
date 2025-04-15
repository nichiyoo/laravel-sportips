<x-app-layout>
  <x-slot name="header">Profile</x-slot>

  <div class="grid gap-8 xl:grid-cols-2">
    <div class="content p-8 bg-white rounded-xl">
      @include('profile.partials.update')
    </div>

    <div class="content p-8 bg-white rounded-xl">
      @include('profile.partials.password')
    </div>

    <div class="content p-8 bg-white rounded-xl col-span-full">
      @include('profile.partials.delete')
    </div>
  </div>
</x-app-layout>
