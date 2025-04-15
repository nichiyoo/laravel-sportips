<nav x-data="{ open: false }" class="bg-pattern border-b border-zinc-900 text-zinc-50">

  <div class="container max-w-7xl">
    <div class="flex justify-between h-16">
      <div class="flex gap-8">
        <div class="shrink-0 flex items-center">
          <a href="{{ route('welcome') }}">
            <x-ui.logo />
          </a>
        </div>

        <div class="hidden lg:flex gap-8">
          <x-dashboard.navbar-link href="{{ route('dashboard') }}" active="{{ request()->routeIs('dashboard') }}">
            Dashboard
          </x-dashboard.navbar-link>

          <x-dashboard.navbar-link href="#">
            Articles
          </x-dashboard.navbar-link>

          <x-dashboard.navbar-link href="#">
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

      <div class="-me-2 flex items-center sm:hidden">
        <button @click="open = ! open" class="p-2">
          <i data-lucide="menu" x-bind:class="open ? 'hidden' : 'block'"></i>
          <i data-lucide="x" x-bind:class="open ? 'block' : 'hidden'"></i>
        </button>
      </div>
    </div>
  </div>

  <x-dashboard.mobile />
</nav>
