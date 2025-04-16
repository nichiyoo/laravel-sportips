@props(['action', 'method' => 'POST', 'sport' => null])

<form method="POST" action="{{ $action }}" class="grid gap-6 xl:grid-cols-2" enctype="multipart/form-data">
  @csrf
  @isset($method)
    @method($method)
  @endisset

  <div>
    <x-ui.label for="name" value="Sport Name" />
    <x-ui.input id="name" name="name" type="text" required value="{{ old('name', $sport?->name) }}"
      placeholder="Enter sport name" />
    @error('name')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div>
    <x-ui.label for="image" value="Sport Image URL" />
    <x-ui.input id="image" name="image" type="text" value="{{ old('image', $sport?->image) }}"
      placeholder="Enter image URL (e.g. /images/sports/football.jpg)" />
    @error('image')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div class="col-span-full">
    <x-ui.label for="description" value="Description" />
    <x-ui.textarea id="description" name="description" rows="4"
      placeholder="Write a short description...">{{ old('description', $sport?->description) }}</x-ui.textarea>
    @error('description')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div class="flex justify-end col-span-full">
    <x-ui.button type="submit">
      <span>{{ strtoupper($method) === 'POST' ? 'Create' : 'Update' }} Sport</span>
      <i data-lucide="arrow-right"></i>
    </x-ui.button>
  </div>
</form>
