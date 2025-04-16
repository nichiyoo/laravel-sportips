@props(['action', 'method' => 'POST', 'content' => null])

<form method="POST" action="{{ $action }}" class="grid gap-6 xl:grid-cols-2">
  @csrf
  @isset($method)
    @method($method)
  @endisset

  <div>
    <x-ui.label for="title" value="Title" />
    <x-ui.input id="title" name="title" value="{{ old('title', $content?->title) }}" required
      placeholder="Enter the title" />
    @error('title')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div>
    <x-ui.label for="video_url" value="Video URL" />
    <x-ui.input id="video_url" name="video_url" value="{{ old('video_url', $content?->video_url) }}" required
      placeholder="Enter the video URL" />
    @error('video_url')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div class="xl:col-span-2">
    <x-ui.label for="body" value="Content Body" />
    <x-ui.textarea id="body" name="body" rows="5"
      placeholder="Enter the content body">{{ old('body', $content?->body) }}</x-ui.textarea>
    @error('body')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div class="flex justify-end col-span-2">
    <x-ui.button>
      <span>{{ $content ? 'Update Content' : 'Create Content' }}</span>
    </x-ui.button>
  </div>
</form>
