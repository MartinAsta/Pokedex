<div class="flex flex-col h-full border border-4 border-black rounded-full shadow-md p-5 w-full hover:shadow-lg hover:scale-105 transition" style="background-color: #DBEDDF;">
    <a href="{{ route('pokemon.show', $pokemon) }}" class="flex flex-col h-full space-y-4">
        <div class="flex justify-between items-center"> <!-- Use justify-between to create space between images -->
            <div class="text-gray-700 text-sm">
                <img src="{{ asset('storage/' . $pokemon->type1->image) }}" alt="{{ $pokemon->type1->name }}" class="max-w-full h-auto">
            </div>
            @if($pokemon->type2)
                <div class="text-gray-700 text-sm text-right">
                    <img src="{{ asset('storage/' . $pokemon->type2->image) }}" alt="{{ $pokemon->type2->name }}" class="max-w-full h-auto">
                </div>
            @endif
        </div>
        <div class="uppercase font-bold text-gray-800">
            {{ $pokemon->name }}
        </div>
        <div class="flex-grow text-gray-700 text-sm text-justify">
            <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->name }}" class="object-scale-down h-48">
        </div>
    </a>
</div>
