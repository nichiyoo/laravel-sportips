<div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
  <div class="pt-2 pb-3 space-y-1">
    <x-dashboard.mobile-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
      Dashboard
    </x-dashboard.mobile-link>

    <x-dashboard.mobile-link :href="route('about')" :active="request()->routeIs('about')">
      About
    </x-dashboard.mobile-link>
  </div>

  <div class="py-4 border-t border-zinc-900">
    <div class="px-8">
      <div class="font-medium text-zinc-50">{{ Auth::user()->name }}</div>
      <div class="ftext-sm text-zinc-400">{{ Auth::user()->email }}</div>
    </div>
    <div class="mt-3 space-y-1">
      <x-dashboard.mobile-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
        Profile
      </x-dashboard.mobile-link>

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dashboard.mobile-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
          Log Out
        </x-dashboard.mobile-link>
      </form>
    </div>
  </div>
</div>
