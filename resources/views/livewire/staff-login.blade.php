<div>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-4 text-center">
                <h2 class="text-2xl font-bold text-gray-800">Staff Login</h2>
            </div>
            
            <form wire:submit="login">
                <div>
                    <x-label for="email" value="E-mail" />
                    <x-input id="email" class="block mt-1 w-full" type="email" wire:model="email" required autofocus autocomplete="username" />
                    @error('email') <span class="text-red-500 text-sm mt-2">{{ $message }}</span> @enderror
                </div>

                <div class="mt-4">
                    <x-label for="password" value="Wachtwoord" />
                    <x-input id="password" class="block mt-1 w-full" type="password" wire:model="password" required autocomplete="current-password" />
                    @error('password') <span class="text-red-500 text-sm mt-2">{{ $message }}</span> @enderror
                </div>

                <div class="block mt-4">
                    <label for="remember" class="flex items-center">
                        <x-checkbox id="remember" wire:model="remember" />
                        <span class="ml-2 text-sm text-gray-600">Onthoud mij</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="w-full justify-center">
                        Inloggen
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</div>
