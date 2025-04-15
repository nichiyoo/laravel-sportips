<section class="space-y-6">
  <x-ui.header>
    <x-slot name="title"> Delete Account
    </x-slot>
    <x-slot name="description">
      Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your
      account, please download any data or information that you wish to retain.
    </x-slot>
  </x-ui.header>

  <x-ui.button x-data="" variant="destructive"
    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
    Delete Account
  </x-ui.button>

  <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
      @csrf
      @method('delete')

      <h2 class="text-lg font-medium">
        Are you sure you want to delete your account?
      </h2>
      <p class="mt-1 text-sm text-zinc-600">
        Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your
        password to confirm you would like to permanently delete your account.
      </p>

      <div class="mt-6">
        <x-ui.label for="password" value="Password" class="sr-only" />
        <x-ui.input id="password" name="password" type="password" placeholder="Enter your password" />
        @error('password')
          <x-ui.error message="{{ $message }}" class="mt-2" />
        @enderror
      </div>

      <div class="mt-6 flex justify-end gap-2">
        <x-ui.button variant="secondary" x-on:click="$dispatch('close')">
          Cancel
        </x-ui.button>
        <x-ui.button variant="destructive">
          Delete Account
        </x-ui.button>
      </div>
    </form>
  </x-modal>
</section>
