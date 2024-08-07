<x-guest-layout>
    <a href="{{ route('pokemon.index') }}"
        class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 transition">
        Retour à la liste des Pokémon
    </a>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
        <!-- Left column for Pokémon details -->
        <div class="flex flex-col space-y-8 lg:space-y-0 lg:space-x-8">
            <div class="flex justify-center space-x-8">
                @if($pokemon->type1)
                    <div class="flex-grow flex justify-center">
                        <img src="{{ asset('storage/' . $pokemon->type1->image) }}" alt="{{ $pokemon->type1->name }}"
                            class="w-90 h-30">
                    </div>
                @endif
                @if($pokemon->type2)
                    <div class="flex-grow flex justify-center">
                        <img src="{{ asset('storage/' . $pokemon->type2->image) }}" alt="{{ $pokemon->type2->name }}"
                            class="w-90 h-30">
                    </div>
                @endif
            </div>
            <div class="text-center lg:text-left">
                <h1 class="font-bold text-3xl my-4">{{ $pokemon->name }}</h1>
                @if($pokemon->image)
                    <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->name }}"
                        class="w-300 h-auto rounded-lg shadow-lg mb-4">
                @endif
                <div class="text-lg">
                    <p><span class="font-bold">HP:</span> {{ $pokemon->hp }}hp</p>
                    <p><span class="font-bold">Poids:</span> {{ $pokemon->weight }}kg</p>
                    <p><span class="font-bold">Taille:</span> {{ $pokemon->height }}m</p>
                </div>
            </div>
        </div>

        <!-- Right column for moves -->
        <div class="flex flex-col ml-0 lg:ml-8">
            <h2 class="text-xl font-bold mb-4">Attaques</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                @if($pokemon->move1)
                    <div class="rounded-lg shadow-lg p-4"
                        style="background-color: {{ optional($pokemon->move1->type)->colour ?? '#FFFFFF' }};">
                        <div class="flex items-center">
                            @if(optional($pokemon->move1->type)->image)
                                <img class="w-24 h-8 mr-2" src="{{ asset('storage/' . $pokemon->move1->type->image) }}"
                                    alt="{{ $pokemon->move1->type->name }}">
                            @endif
                            <div class="font-bold text-gray-800">{{ $pokemon->move1->name }}</div>
                        </div>
                        <div class="text-gray-600 mt-2">{{ $pokemon->move1->move_descr }}</div>
                        <div class="text-gray-600">Dégâts : {{ $pokemon->move1->damage }}</div>
                    </div>
                @endif


                @if($pokemon->move2)
                    <div class="bg-white rounded-lg shadow-lg p-4"
                        style="background-color: {{ optional($pokemon->move2->type)->colour ?? '#FFFFFF' }};">
                        <div class="flex items-center">
                            @if(optional($pokemon->move2->type)->image)
                                <img class="w-24 h-8 mr-2" src="{{ asset('storage/' . $pokemon->move2->type->image) }}"
                                    alt="{{ $pokemon->move2->type->name }}">
                            @endif
                            <div class="font-bold text-gray-800">{{ $pokemon->move2->name }}</div>
                        </div>
                        <div class="text-gray-600 mt-2">{{ $pokemon->move2->move_descr }}</div>
                        <div class="text-gray-600">Dégâts : {{ $pokemon->move2->damage }}</div>
                    </div>
                @endif

                @if($pokemon->move3)
                    <div class="bg-white rounded-lg shadow-lg p-4"
                        style="background-color: {{ optional($pokemon->move3->type)->colour ?? '#FFFFFF' }};">
                        <div class="flex items-center">
                            @if(optional($pokemon->move3->type)->image)
                                <img class="w-24 h-8 mr-2" src="{{ asset('storage/' . $pokemon->move3->type->image) }}"
                                    alt="{{ $pokemon->move3->type->name }}">
                            @endif
                            <div class="font-bold text-gray-800">{{ $pokemon->move3->name }}</div>
                        </div>
                        <div class="text-gray-600 mt-2">{{ $pokemon->move3->move_descr }}</div>
                        <div class="text-gray-600">Dégâts : {{ $pokemon->move3->damage }}</div>
                    </div>
                @endif

                @if($pokemon->move4)
                    <div class="bg-white rounded-lg shadow-lg p-4"
                        style="background-color: {{ optional($pokemon->move4->type)->colour ?? '#FFFFFF' }};">
                        <div class="flex items-center">
                            @if(optional($pokemon->move3->type)->image)
                                <img class="w-24 h-8 mr-2" src="{{ asset('storage/' . $pokemon->move4->type->image) }}"
                                    alt="{{ $pokemon->move4->type->name }}">
                            @endif
                            <div class="font-bold text-gray-800">{{ $pokemon->move4->name }}</div>
                        </div>
                        <div class="text-gray-600 mt-2">{{ $pokemon->move4->move_descr }}</div>
                        <div class="text-gray-600">Dégâts : {{ $pokemon->move4->damage }}</div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>