<x-guest-layout>
    <h1 class="font-bold text-xl mb-4">Liste des Pokemons</h1>

    <form action="{{ route('pokemon.index') }}" method="GET" class="mb-4">
        <div class="flex items-center">
            <input type="text" name="search" id="search" placeholder="Rechercher un Pokemon"
                class="flex-grow border border-gray-300 rounded shadow px-4 py-2 mr-4" value="{{ request()->search }}"
                autofocus />
            <button type="submit" class="bg-white text-gray-600 px-4 py-2 rounded-lg shadow">
                <x-heroicon-o-magnifying-glass class="h-5 w-5" />
            </button>
        </div>
    </form>

    <ul class="grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8">
        @foreach ($pokemon as $poke)
            <li>
                <x-pokemon-card :pokemon="$poke" />
            </li>
        @endforeach
    </ul>

    <div class="mt-8">
        {{ $pokemon->links() }}
    </div>
</x-guest-layout>