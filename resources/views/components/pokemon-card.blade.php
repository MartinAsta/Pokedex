<div class="flex flex-col h-full bg-white rounded-md shadow-md p-5 w-full hover:shadow-lg hover:scale-105 transition">
    <a href="{{ route('pokemon.show', $pokemon) }}" class="flex flex-col h-full space-y-4">
        <div class="flex space-x-4"> <!-- Use space-x-4 to create space between images -->
            <div class="flex-grow text-gray-700 text-sm text-justify">
                <img src="{{ asset('storage/' . $pokemon->type1->image) }}" alt="{{ $pokemon->type1->name }}" class="max-w-full h-auto">
            </div>
            @if($pokemon->type2)
                <div class="flex-grow text-gray-700 text-sm text-justify">
                    <img src="{{ asset('storage/' . $pokemon->type2->image) }}" alt="{{ $pokemon->type2->name }}" class="max-w-full h-auto">
                </div>
            @endif
        </div>
        <div class="uppercase font-bold text-gray-800">
            {{ $pokemon->name }}
        </div>
        <div class="flex-grow text-gray-700 text-sm text-justify">
            <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->name }}" class="max-w-full h-auto">
        </div>
    </a>
</div>
