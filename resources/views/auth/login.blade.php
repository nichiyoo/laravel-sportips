<x-guest-layout>
  <x-ui.header>
    <x-slot name="title">Log in to your account</x-slot>
    <x-slot name="description">Log in to your account to access all features and functionalities.</x-slot>
  </x-ui.header>

  <x-ui.status class="mb-4" :status="session('status')" />

  <form method="POST" action="{{ route('login') }}" class="grid gap-4">
    @csrf
    <div>
      <x-ui.label for="email" value="Email" />
      <x-ui.input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
        autocomplete="username" placeholder="Enter your email" />
      @error('email')
        <x-ui.error message="{{ $message }}" />
      @enderror
    </div>

    <div>
      <div class="flex items-center justify-between">
        <x-ui.label for="password" value="Password" />
        <a href="{{ route('password.request') }}" class="text-sm text-zinc-500">
          Forgot your password?
        </a>
      </div>

      <x-ui.input id="password" type="password" name="password" required autocomplete="current-password"
        placeholder="Enter your password" />
      @error('password')
        <x-ui.error message="{{ $message }}" />
      @enderror
    </div>

    <div class="block">
      <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox"
          class="rounded shadow-sm border-zinc-300 text-primary-600 focus:ring-primary-500" name="remember">
        <span class="text-sm ms-2 text-zinc-600">Remember me</span>
      </label>
    </div>

    <div class="flex items-center justify-end gap-4">
      <a href="{{ route('register') }}" class="text-sm text-zinc-500">
        Already have an account?
      </a>

      <x-ui.button>
        <span>Log in</span>
        <i data-lucide="arrow-right"></i>
      </x-ui.button>
    </div>
  </form>
</x-guest-layout>
