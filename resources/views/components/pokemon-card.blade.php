<div>
    <a class="flex flex-col h-full space-y-4 bg-white rounded-md shadow-md p-5 w-full hover:shadow-lg hover:scale-105 transition"
        href="{{ route('pokemon.show', $pokemon) }}">
        <div class="flex-grow text-gray-700 text-sm text-justify">
            <img src="{{ asset('storage/' . $pokemon->type1->image) }}" alt="{{ $pokemon->type1->name }}">
        </div>
        <div class="uppercase font-bold text-gray-800">
            {{ $pokemon->name }}
        </div>
        <div class="flex-grow text-gray-700 text-sm text-justify">
            <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->name }}">
        </div>
    </a>
</div>