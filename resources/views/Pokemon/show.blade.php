<x-guest-layout>
    <a class="font-bold hover:text-emerald-600 transition" href="{{ route('pokemon.index') }}">Retour à la liste des
        Pokemon</a>
    <h1 class="font-bold text-xl mb-4">{{ $pokemon->name }}</h1>
    <div>
        <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->name }}">
    </div>
    <div>
        {{$pokemon->hp}}hp
    </div>
    <div>
        {{$pokemon->weight}}kg
    </div>
    <div>
        {{$pokemon->height}}m
    </div>
</x-guest-layout>