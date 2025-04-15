<section>
  <x-ui.header>
    <x-slot name="title">
      Profile Information
    </x-slot>
    <x-slot name="description">
      Update your account&apos;s profile information and email address.
    </x-slot>
  </x-ui.header>

  <form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
  </form>

  <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')

    <div>
      <x-ui.label for="name" value="Name" />
      <x-ui.input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus
        autocomplete="name" />
      @error('name')
        <x-ui.error message="{{ $message }}" />
      @enderror
    </div>

    <div>
      <x-ui.label for="email" value="Name" />
      <x-ui.input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required
        autocomplete="username" />
      @error('email')
        <x-ui.error message="{{ $message }}" />
      @enderror
    </div>

    <div class="flex items-center gap-4">
      <x-ui.button>Save Profile</x-ui.button>
      @if (session('status') === 'profile-updated')
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-zinc-600">
          Saved.</p>
      @endif
    </div>
  </form>
</section>
