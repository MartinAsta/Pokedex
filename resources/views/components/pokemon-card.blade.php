<div id="card{{$pokemon->id}}"
    class="flex justify-center items-center h-full border-4 border-black rounded-full shadow-md p-5 w-full hover:shadow-lg hover:scale-105 transition"
    style="background-color: #DBEDDF;">
    <a href="{{ route('pokemon.show', $pokemon) }}" class="flex flex-col h-full space-y-4 items-center">
        <div class="flex items-center">
            <div class="flex flex-col items-center">
                <div class="uppercase font-bold text-gray-800 mb-2">
                    {{ $pokemon->name }}
                </div>
                @if($pokemon->type1)
                    <div class="text-gray-700 text-sm">
                        <img src="{{ asset('storage/' . $pokemon->type1->image) }}" alt="{{ $pokemon->type1->name }}"
                            class="max-w-full h-auto">
                    </div>
                @endif
                @if($pokemon->type2)
                    <div class="text-gray-700 text-sm mt-2">
                        <img src="{{ asset('storage/' . $pokemon->type2->image) }}" alt="{{ $pokemon->type2->name }}"
                            class="max-w-full h-auto">
                    </div>
                @endif
            </div>
            @if($pokemon->image)
                <div class="text-gray-700 text-sm ml-4">
                    <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->name }}"
                        class="object-contain h-48">
                </div>
            @endif
        </div>
    </a>
</div>