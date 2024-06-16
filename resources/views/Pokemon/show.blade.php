<x-guest-layout>
    <a class="font-bold hover:text-emerald-600 transition" href="{{ route('pokemon.index') }}">Retour à la liste des Pokemon</a>
    <div class="grid grid-cols-2 gap-8 mt-8">
        <!-- Left column for Pokemon details -->
        <div class="flex flex-col">
            <div class="flex space-x-8"> <!-- Use space-x-8 for spacing between type1 and type2 images -->
                <div class="flex-grow">
                    <img src="{{ asset('storage/' . $pokemon->type1->image) }}" alt="{{ $pokemon->type1->name }}" class="max-w-full h-auto">
                </div>
                @if($pokemon->type2)
                <div class="flex-grow">
                    <img src="{{ asset('storage/' . $pokemon->type2->image) }}" alt="{{ $pokemon->type2->name }}" class="max-w-full h-auto">
                </div>
                @endif
            </div>
            <h1 class="font-bold text-xl my-4">{{ $pokemon->name }}</h1>
            <div>
                <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->name }}" class="max-w-full h-auto">
            </div>
            <div>{{ $pokemon->hp }}hp</div>
            <div>{{ $pokemon->weight }}kg</div>
            <div>{{ $pokemon->height }}m</div>
        </div>

        <!-- Right column for moves -->
        <div class="flex flex-col ml-8">
            @if($pokemon->move1 && $pokemon->move1->type)
            <div class="uppercase font-bold text-gray-800 mb-4">
                <img class="inline" src="{{ asset('storage/' . $pokemon->move1->type->image) }}" alt="{{ $pokemon->move1->type->name }}">
                <span class="inline">{{ $pokemon->move1->name }} : {{ $pokemon->move1->move_descr }} (Dégâts : {{ $pokemon->move1->damage }})</span>
            </div>
            @endif

            @if($pokemon->move2 && $pokemon->move2->type)
            <div class="uppercase font-bold text-gray-800 mb-4">
                <img class="inline" src="{{ asset('storage/' . $pokemon->move2->type->image) }}" alt="{{ $pokemon->move2->type->name }}">
                <span class="inline">{{ $pokemon->move2->name }} : {{ $pokemon->move2->move_descr }} (Dégâts : {{ $pokemon->move2->damage }})</span>
            </div>
            @endif

            @if($pokemon->move3 && $pokemon->move3->type)
            <div class="uppercase font-bold text-gray-800 mb-4">
                <img class="inline" src="{{ asset('storage/' . $pokemon->move3->type->image) }}" alt="{{ $pokemon->move3->type->name }}">
                <span class="inline">{{ $pokemon->move3->name }} : {{ $pokemon->move3->move_descr }} (Dégâts : {{ $pokemon->move3->damage }})</span>
            </div>
            @endif

            @if($pokemon->move4 && $pokemon->move4->type)
            <div class="uppercase font-bold text-gray-800 mb-4">
                <img class="inline" src="{{ asset('storage/' . $pokemon->move4->type->image) }}" alt="{{ $pokemon->move4->type->name }}">
                <span class="inline">{{ $pokemon->move4->name }} : {{ $pokemon->move4->move_descr }} (Dégâts : {{ $pokemon->move4->damage }})</span>
            </div>
            @endif
        </div>
    </div>
</x-guest-layout>
