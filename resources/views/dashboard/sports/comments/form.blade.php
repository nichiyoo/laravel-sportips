@props(['action', 'method' => 'POST', 'comment' => null, 'users' => []])

<form method="POST" action="{{ $action }}" class="grid gap-6 xl:grid-cols-2">
  @csrf
  @isset($method)
    @method($method)
  @endisset

  <div class="xl:col-span-2">
    <x-ui.label for="body" value="Comment" />
    <x-ui.textarea id="body" name="body" rows="4" placeholder="Enter your comment here"
      required>{{ old('body', $comment?->body) }}</x-ui.textarea>
    @error('body')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div>
    <x-ui.label for="user_id" value="User" />
    <x-ui.select id="user_id" name="user_id" required>
      @foreach ($users as $user)
        <option value="{{ $user->id }}" @selected(old('user_id', $comment?->user_id) == $user->id)>
          {{ $user->name }}
        </option>
      @endforeach
    </x-ui.select>

    @error('user_id')
      <x-ui.error message="{{ $message }}" />
    @enderror
  </div>

  <div class="flex justify-end col-span-2">
    <x-ui.button>
      <span>{{ $comment ? 'Update Comment' : 'Post Comment' }}</span>
    </x-ui.button>
  </div>
</form>
