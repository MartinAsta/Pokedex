<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pokemon') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex justify-between mt-8">
                <div class=" text-2xl">
                    Ajouter un Pokemon
                </div>
            </div>

            <form method="POST" action="{{ route('pokemon.store') }}" class="flex flex-col space-y-4 text-gray-500">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="hp" :value="__('HP')" />
                    <x-text-input id="hp" class="block mt-1 w-full" type="number" name="hp" :value="old('hp')" />
                    <x-input-error :messages="$errors->get('hp')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="weight" :value="__('Weight')" />
                    <x-text-input id="weight" class="block mt-1 w-full" type="number" step="0.1" name="weight"
                        :value="old('weight')" />
                    <x-input-error :messages="$errors->get('weight')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="height" :value="__('Height')" />
                    <x-text-input id="height" class="block mt-1 w-full" type="number" step="0.1" name="height"
                        :value="old('height')" />
                    <x-input-error :messages="$errors->get('height')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="type1" :value="__('Type')" />
                    <x-text-input id="type1" class="block mt-1 w-full" type="number" name="type1"
                        :value="old('type1')" />
                    <x-input-error :messages="$errors->get('type1')" class="mt-2" />
                </div>

                <div class="flex justify-end">
                    <x-primary-button type="submit">
                        {{ __('Create') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>