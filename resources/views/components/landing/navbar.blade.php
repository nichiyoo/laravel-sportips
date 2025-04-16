<nav class="py-3">
  <div class="flex items-center justify-between">
    <ul class="items-center hidden gap-10 lg:flex">
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('contact') }}">Contact</a></li>
      <li><a href="{{ route('sports') }}">Sports</a></li>
    </ul>

    <a href="{{ route('welcome') }}">
      <x-ui.logo />
    </a>

    <div class="flex items-center gap-4">
      <x-search class="hidden lg:flex" />

      @auth
        <a href="{{ route('dashboard') }}">
          <x-ui.button>
            <span>Dashboard</span>
            <i data-lucide="arrow-up-right"></i>
          </x-ui.button>
        </a>
      @else
        <a href="{{ route('login') }}">
          <x-ui.button>
            <span>Login</span>
            <i data-lucide="arrow-up-right"></i>
          </x-ui.button>
        </a>
      @endauth
    </div>
  </div>
</nav>
