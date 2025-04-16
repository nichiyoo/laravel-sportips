<nav x-data="{ open: false }" class="border-b bg-pattern border-zinc-900 text-zinc-50">

  <div class="container max-w-7xl">
    <div class="flex justify-between h-16">
      <div class="flex gap-8">
        <div class="flex items-center shrink-0">
          <a href="{{ route('welcome') }}">
            <x-ui.logo />
          </a>
        </div>

        <div class="hidden gap-8 lg:flex">
          <x-dashboard.navbar-link href="{{ route('admin.dashboard') }}"
            active="{{ request()->routeIs('admin.dashboard') }}">
            Dashboard
          </x-dashboard.navbar-link>

          <x-dashboard.navbar-link href="{{ route('admin.sports.index') }}"
            active="{{ request()->routeIs('admin.sports.*') }}">
            Sports
          </x-dashboard.navbar-link>

          <x-dashboard.navbar-link href="{{ route('admin.users.index') }}"
            active="{{ request()->routeIs('admin.users.*') }}">
            Users
          </x-dashboard.navbar-link>
        </div>
      </div>

      <div class="hidden sm:flex sm:items-center sm:ms-6">
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button class="flex items-center gap-2 text-sm">
              <div>{{ Auth::user()->name }}</div>
              <i data-lucide="chevron-down"></i>
            </button>
          </x-slot>

          <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
              Profile
            </x-dropdown-link>

            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                Log Out
              </x-dropdown-link>
            </form>
          </x-slot>
        </x-dropdown>
      </div>

      <div class="flex items-center -me-2 sm:hidden">
        <button @click="open = ! open" class="p-2">
          <i data-lucide="menu" x-bind:class="open ? 'hidden' : 'block'"></i>
          <i data-lucide="x" x-bind:class="open ? 'block' : 'hidden'"></i>
        </button>
      </div>
    </div>
  </div>

  <x-dashboard.mobile />
</nav>
