<x-app-layout>
    <div class="py-12 bg-red-500 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="flex justify-between mt-8">
                        <div class="text-2xl">
                            Liste des Pokemon (ADMIN)
                        </div>

                        <div class="flex items-center justify-center space-x-8">
                            <a href="{{ route('pokemon.create') }}" id="Create"
                                class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition">
                                Ajouter un Pokemon
                            </a>
                        </div>
                    </div>

                    <div class="mt-6 text-gray-500">
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="uppercase text-left">
                                    <th class="px-1 py-2 border">Id :</th>
                                    <th class="px-4 py-2 border">Pokemon :</th>
                                    <th class="px-4 py-2 border"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pokemon as $poke)
                                    <tr class="hover:bg-gray-50 odd:bg-gray-100 hover:odd:bg-gray-200 transition">
                                        <td class="border px-4 py-2">
                                            {{ $poke->id }}
                                        </td>
                                        <td class="border px-4 py-2">
                                            {{ $poke->name }}
                                        </td>
                                        <td class="border px-4 py-2 space-x-4">
                                            <a id="poke{{$poke->id}}" href="{{ route('pokemon.edit', $poke->id) }}" class="text-blue-400">Edit</a>
                                            <form action="{{ route('pokemon.destroy', $poke->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-400">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="mt-4">
                            {{ $pokemon->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
