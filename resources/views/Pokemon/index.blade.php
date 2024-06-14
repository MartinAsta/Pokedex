<x-guest-layout>
    <h1 class="font-bold text-xl mb-4">Liste des Pokemons</h1>
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