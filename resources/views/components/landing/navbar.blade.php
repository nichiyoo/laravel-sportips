<nav class="py-3">
  <div class="flex items-center justify-between">
    <ul class="hidden lg:flex items-center gap-10">
      <li><a href="{{ route('welcome') }}">About</a></li>
      <li><a href="{{ route('welcome') }}">Contact</a></li>
      <li><a href="{{ route('welcome') }}">Categories</a></li>
    </ul>

    <a href="{{ route('welcome') }}">
      <x-ui.logo />
    </a>

    <div class="flex items-center gap-4">
      <x-search />

      @auth
        <a href="{{ route('dashboard') }}">
          <x-ui.cta>
            <span>Dashboard</span>
            <i data-lucide="arrow-up-right"></i>
          </x-ui.cta>
        </a>
      @else
        <a href="{{ route('login') }}">
          <x-ui.cta>
            <span>Login</span>
            <i data-lucide="arrow-up-right"></i>
          </x-ui.cta>
        </a>
      @endauth
    </div>
  </div>
</nav>
