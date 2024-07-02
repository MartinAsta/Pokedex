<x-app-layout>

    <div class="bg-red-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between mt-8">
                    <div class="text-2xl">
                        Modifier un type
                    </div>
                </div>

                <form method="POST" action="{{ route('types.update', $type) }}"
                    class="flex flex-col space-y-4 text-gray-500" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <x-input-label for="name" :value="__('Nom')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name', $type->name)" autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="colour" :value="__('Couleur')" />
                            <x-text-input id="colour" class="block mt-1 w-full" type="text" name="colour"
                                :value="old('colour', $type->colour)" autofocus />
                            <x-input-error :messages="$errors->get('colour')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="img" :value="__('Image')" />
                            @if ($type->image)
                                <img src="{{ asset('storage/' . $type->image) }}" alt="Image du type"
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