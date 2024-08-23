<div>
    <form wire:submit.prevent="register">
        <label for="name">Name</label>
        <input id="name" type="text" wire:model="name"><br>
        @error('name') <div class="text-red-400">{{ $message }} </div> @enderror

        <label for="email">email</label>
        <input id="email" type="email" wire:model.lazy="email"><br>
        @error('email') <div class="text-red-400">{{ $message }} </div> @enderror

        <label for="name">Password</label>
        <input id="password" type="password" wire:model.lazy="password"><br>
        @error('password') <div class="text-red-400">{{ $message }} </div> @enderror
        <button>Register</button>
    </form>{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
</div>
