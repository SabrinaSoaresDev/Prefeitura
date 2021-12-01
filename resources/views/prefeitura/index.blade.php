<x-app-layout>
    <x-slot name="header">
        {{ __('Prefeitura') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        {{ __('Prefeitura') }}
    </div>
    <div class="p-4 bg-white rounded-lg shadow-md">

        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mt-4">
                <x-label for="name" :value="__('Name')"/>
                <x-input type="text"
                         id="name"
                         name="name"
                         class="block w-full"
                         value="{{ old('name', auth()->user()->name) }}"
                         required/>
                @error('name')
                    <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mt-4">
                <x-label for="email" :value="__('Email')"/>
                <x-input name="email"
                         type="email"
                         class="block w-full"
                         value="{{ old('email', auth()->user()->email) }}"
                         required/>
                @error('email')
                    <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__('New password')"/>
                <x-input type="password"
                         name="password"
                         class="block w-full"
                         required/>
                @error('password')
                    <span class="text-xs text-red-600 dark:text-red-400">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mt-4">
                <x-label id="password_confirmation" :value="__('New password confirmation')"/>
                <x-input type="password"
                         name="password_confirmation"
                         class="block w-full"
                         required/>
            </div>

            <div class="mt-4">
                <x-button class="block w-full">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
    </div>
</x-app-layout>

