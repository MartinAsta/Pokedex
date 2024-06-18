<x-guest-layout>
    <div class="min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <h1 class="font-bold text-xl mb-4">Liste des Pokemons</h1>

            <form action="{{ route('pokemon.index') }}" method="GET" class="mb-4">
                <div class="flex items-center">
                    <input type="text" name="search" id="search" placeholder="Rechercher un Pokemon"
                        class="flex-grow border border-gray-300 rounded shadow px-4 py-2 mr-4" value="{{ request()->search }}"
                        autofocus />
                    <button type="submit" id="SubmitSearch" class="bg-white text-gray-600 px-4 py-2 rounded-lg shadow">
                        <x-heroicon-o-magnifying-glass class="h-5 w-5" />
                    </button>
                </div>
            </form>

            <ul class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                @foreach ($pokemon as $poke)
                    <li>
                        <x-pokemon-card :pokemon="$poke" />
                    </li>
                @endforeach
            </ul>

            <div class="mt-8">
                {{ $pokemon->links() }}
            </div>
        </div>
    </div>
</x-guest-layout>
