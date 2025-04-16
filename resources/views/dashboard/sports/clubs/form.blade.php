@props(['action', 'method' => 'POST', 'club' => null])

<form method="POST" action="{{ $action }}" class="grid gap-6 xl:grid-cols-2">
  @csrf
  @isset($method)
    @method($method)
  @endisset

  <div class="col-span-full">
    <x-ui.label for="name" value="Club Name" />
    <x-ui.input id="name" name="name" value="{{ old('name', $club?->name) }}" required
      placeholder="Enter club name" />
    @error('name')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div>
    <x-ui.label for="email" value="Email" />
    <x-ui.input id="email" type="email" name="email" value="{{ old('email', $club?->email) }}"
      placeholder="Enter club email" />
    @error('email')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div>
    <x-ui.label for="phone" value="Phone" />
    <x-ui.input id="phone" name="phone" value="{{ old('phone', $club?->phone) }}"
      placeholder="Enter club phone" />
    @error('phone')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div class="flex justify-end col-span-2">
    <x-ui.button>
      <span>{{ $club ? 'Update Club' : 'Create Club' }}</span>
    </x-ui.button>
  </div>
</form>
