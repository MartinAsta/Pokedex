<x-app-layout>
    <div class="py-12 bg-red-500 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="flex justify-between mt-8">
                        <div class="text-2xl">
                            Liste des attaques (ADMIN)
                        </div>

                        <div class="flex items-center justify-center space-x-8">
                            <a href="{{ route('moves.create') }}" id="Create"
                                class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition">
                                Ajouter une attaque
                            </a>
                        </div>
                    </div>

                    <div class="mt-6 text-gray-500">
                        <table class="table-auto w-full">
                            <thead>
                                <tr class="uppercase text-left">
                                    <th class="px-4 py-2 border">ID :</th>
                                    <th class="px-4 py-2 border">Type :</th>
                                    <th class="px-4 py-2 border">Nom :</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($moves as $m)
                                    <tr class="hover:bg-gray-50 odd:bg-gray-100 hover:odd:bg-gray-200 transition">
                                        <td class="border px-4 py-2">
                                            {{ $m->id }}
                                        </td>
                                        <td class="border px-4 py-2">
                                            {{ $m->type->name }}
                                        </td>
                                        <td class="border px-4 py-2">
                                            {{ $m->name }}
                                        </td>
                                        <td class="border px-4 py-2 space-x-4">
                                            <a id="move{{$m->id}}" href="{{ route('moves.edit', $m->id) }}"
                                                class="text-blue-400">Edit</a>
                                            <form action="{{ route('moves.destroy', $m->id) }}" method="POST"
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
                            {{ $moves->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>