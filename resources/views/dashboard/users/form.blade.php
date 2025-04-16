@props(['action', 'method' => 'POST', 'user' => null])

<form method="POST" action="{{ $action }}" class="grid gap-6 xl:grid-cols-2">
  @csrf
  @isset($method)
    @method($method)
  @endisset

  <div class="col-span-full">
    <x-ui.label for="name" value="Name" />
    <x-ui.input id="name" name="name" value="{{ old('name', $user?->name) }}" required
      placeholder="Enter the user name" />
    @error('name')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div class="col-span-full">
    <x-ui.label for="email" value="Email" />
    <x-ui.input id="email" type="email" name="email" value="{{ old('email', $user?->email) }}" required
      placeholder="Enter the user email" />
    @error('email')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div>
    <x-ui.label for="role" value="Role" />
    <x-ui.select id="role" name="role" required value="{{ old('role', $user?->role) }}">
      <option value="Administrator" @if ($user?->role === 'Administrator') selected @endif>Administrator</option>
      <option value="Customer" @if ($user?->role === 'Customer') selected @endif>Customer</option>
    </x-ui.select>
    @error('role')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div>
    <x-ui.label for="password" value="Password" />
    <x-ui.input id="password" type="password" name="password" placeholder="Leave blank if unchanged" />
    @error('password')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div class="flex justify-end col-span-2">
    <x-ui.button>
      <span>{{ $user ? 'Update User' : 'Create User' }}</span>
    </x-ui.button>
  </div>
</form>
