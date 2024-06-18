<x-app-layout>

    <div class="bg-red-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between mt-8">
                    <div class="text-2xl">
                        Modifier un Pokemon
                    </div>
                </div>

                <form method="POST" action="{{ route('pokemon.update', $pokemon) }}"
                    class="flex flex-col space-y-4 text-gray-500" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="name" :value="__('Nom')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name', $pokemon->name)" autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="hp" :value="__('HP')" />
                            <x-text-input id="hp" class="block mt-1 w-full" type="number" name="hp"
                                :value="old('hp', $pokemon->hp)" />
                            <x-input-error :messages="$errors->get('hp')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="weight" :value="__('Poids')" />
                            <x-text-input id="weight" class="block mt-1 w-full" type="number" step="0.1"
                                name="weight" :value="old('weight', $pokemon->weight)" />
                            <x-input-error :messages="$errors->get('weight')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="height" :value="__('Taille')" />
                            <x-text-input id="height" class="block mt-1 w-full" type="number" step="0.1"
                                name="height" :value="old('height', $pokemon->height)" />
                            <x-input-error :messages="$errors->get('height')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="type1" :value="__('Type 1')" />
                            <select id="type1" name="type1" class="block mt-1 w-full">
                                <option value="">-</option>
                                @foreach($types as $type)
                                <option value="{{ $type->id }}" {{ $pokemon->type1_id == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('type1')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="type2" :value="__('Type 2')" />
                            <select id="type2" name="type2" class="block mt-1 w-full">
                                <option value="">-</option>
                                @foreach($types as $type)
                                <option value="{{ $type->id }}" {{ $pokemon->type2_id == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('type2')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="move1" :value="__('Attaque 1')" />
                            <select id="move1" name="move1" class="block mt-1 w-full">
                                <option value="">-</option>
                                @foreach($moves as $move)
                                <option value="{{ $move->id }}" {{ $pokemon->move1_id == $move->id ? 'selected' : '' }}>
                                    {{ $move->name }}
                                </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('move1')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="move2" :value="__('Attaque 2')" />
                            <select id="move2" name="move2" class="block mt-1 w-full">
                                <option value="">-</option>
                                @foreach($moves as $move)
                                <option value="{{ $move->id }}" {{ $pokemon->move2_id == $move->id ? 'selected' : '' }}>
                                    {{ $move->name }}
                                </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('move2')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="move3" :value="__('Attaque 3')" />
                            <select id="move3" name="move3" class="block mt-1 w-full">
                                <option value="">-</option>
                                @foreach($moves as $move)
                                <option value="{{ $move->id }}" {{ $pokemon->move3_id == $move->id ? 'selected' : '' }}>
                                    {{ $move->name }}
                                </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('move3')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="move4" :value="__('Attaque 4')" />
                            <select id="move4" name="move4" class="block mt-1 w-full">
                                <option value="">-</option>
                                @foreach($moves as $move)
                                <option value="{{ $move->id }}" {{ $pokemon->move4_id == $move->id ? 'selected' : '' }}>
                                    {{ $move->name }}
                                </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('move4')" class="mt-2" />
                        </div>
                    </div>

                    <div>
                        <x-input-label for="img" :value="__('Image')" />
                        @if ($pokemon->image)
                        <img src="{{ asset('storage/' . $pokemon->image) }}" alt="Image du Pokemon"
                            class="aspect-auto h-64 rounded shadow mt-2 mb-4 object-cover object-center">
                        @endif
                        <x-text-input id="img" class="block mt-1 w-full" type="file" name="img" />
                        <x-input-error :messages="$errors->get('img')" class="mt-2" />
                    </div>

                    <div class="flex justify-end">
                        <x-primary-button id="SubmitEdit" type="submit">
                            {{ __('Modifier') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
