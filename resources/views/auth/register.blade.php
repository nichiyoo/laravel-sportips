<x-guest-layout>
  <x-ui.header>
    <x-slot name="title">Welcome to Sportips</x-slot>
    <x-slot name="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, perferendis!.</x-slot>
  </x-ui.header>

  <form method="POST" action="{{ route('register') }}" class="grid gap-4">
    @csrf

    <div>
      <x-ui.label for="name" value="Name" />
      <x-ui.input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
        autocomplete="name" placeholder="Enter your name" />
      @error('name')
        <x-ui.error message="{{ $message }}" />
      @enderror
    </div>

    <div>
      <x-ui.label for="email" value="Email" />
      <x-ui.input id="email" type="email" name="email" value="{{ old('email') }}" required
        autocomplete="username" placeholder="Enter your email" />
      @error('email')
        <x-ui.error message="{{ $message }}" />
      @enderror
    </div>

    <div>
      <x-ui.label for="password" value="Password" />
      <x-ui.input id="password" type="password" name="password" required autocomplete="new-password"
        placeholder="Enter your password" />
      @error('password')
        <x-ui.error message="{{ $message }}" />
      @enderror
    </div>

    <div>
      <x-ui.label for="password_confirmation" value="Confirm Password" />
      <x-ui.input id="password_confirmation" type="password" name="password_confirmation" required
        autocomplete="new-password" placeholder="Confirm your password" />
      @error('password_confirmation')
        <x-ui.error message="{{ $message }}" />
      @enderror
    </div>

    <div class="flex items-center justify-end gap-4 mt-5">
      <a href="{{ route('login') }}" class="text-sm text-zinc-500">
        Already registered?
      </a>
      <x-ui.button>
        <span>Create Account</span>
        <i data-lucide="arrow-right"></i>
      </x-ui.button>
    </div>
  </form>
</x-guest-layout>
