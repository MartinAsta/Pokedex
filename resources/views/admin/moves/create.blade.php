<x-app-layout>
    <div class="py-12 bg-red-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between mt-8">
                    <div class="text-2xl">
                        Ajouter une attaque
                    </div>
                </div>

                <form method="POST" action="{{ route('moves.store') }}" class="flex flex-col space-y-4 text-gray-500"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="type" :value="__('Type')" />
                            <select id="type" name="type" class="block mt-1 w-full">
                                <option value="">-</option>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}" {{ old('type') == $type->id ? 'selected' : '' }}>
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('type')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="name" :value="__('Nom')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="move_descr" :value="__('Description')" />
                            <x-text-input id="move_descr" class="block mt-1 w-full" type="text" name="move_descr" :value="old('move_descr')"
                                autofocus />
                            <x-input-error :messages="$errors->get('move_descr')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="damage" :value="__('Dégâts')" />
                            <x-text-input id="damage" class="block mt-1 w-full" type="number" name="damage" :value="old('damage')" />
                            <x-input-error :messages="$errors->get('damage')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <x-primary-button id="SubmitCreate" type="submit">
                            {{ __('Create') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
