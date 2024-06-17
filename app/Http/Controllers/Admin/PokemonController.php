<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
use App\Models\Moves;
use App\Models\Types;
use Illuminate\Http\Request;
use App\Http\Requests\PokemonCreateRequest;
use App\Http\Requests\PokemonUpdateRequest;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemon = Pokemon::orderByDesc('updated_at')
            ->paginate(10)
        ;

        return view(
            'admin.pokemon.index',
            [
                'pokemon' => $pokemon,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $moves = Moves::all();
        $types = Types::all();

        return view(
            'admin.pokemon.create',
            ['moves' => $moves, 'types' => $types]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PokemonCreateRequest $request)
    {
        $pokemon = Pokemon::make();

        $pokemon->name = $request->validated()['name'];
        $pokemon->hp = $request->validated()['hp'];
        $pokemon->weight = $request->validated()['weight'];
        $pokemon->height = $request->validated()['height'];

        $pokemon->type1_id = $request->validated()['type1'];
        if ($request['type1'] !== $request['type2']) {
            $pokemon->type2_id = $request->validated()['type2'];
        }

        $pokemon->move1_id = $request->validated()['move1'];
        if ($request['move1'] !== $request['move2']) {
            $pokemon->move2_id = $request->validated()['move2'];
        }
        if ($request['move1'] !== $request['move3'] && $request['move2'] !== $request['move3']) {
            $pokemon->move3_id = $request->validated()['move3'];
        }
        if ($request['move1'] !== $request['move4'] && $request['move2'] !== $request['move4'] && $request['move3'] !== $request['move4']) {
            $pokemon->move4_id = $request->validated()['move4'];
        }

        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('images/pokemon', 'public');
            $pokemon->image = $path;
        }
        

        $pokemon->save();

        return redirect()->route('admin.pokemon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        $moves = Moves::all();
        $types = Types::all();

        return view('admin.pokemon.edit', compact('pokemon'),['moves' => $moves, 'types' => $types,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PokemonUpdateRequest $request, Pokemon $pokemon)
    {
        $pokemon->name = $request->validated()['name'];
        $pokemon->hp = $request->validated()['hp'];
        $pokemon->height = $request->validated()['height'];
        $pokemon->weight = $request->validated()['weight'];
        
        $pokemon->type1_id = $request->validated()['type1'];
        if ($request['type1'] !== $request['type2']) {
            $pokemon->type2_id = $request->validated()['type2'];
        }

        $pokemon->move1_id = $request->validated()['move1'];
        if ($request['move1'] !== $request['move2']) {
            $pokemon->move2_id = $request->validated()['move2'];
        }
        if ($request['move1'] !== $request['move3'] && $request['move2'] !== $request['move3']) {
            $pokemon->move3_id = $request->validated()['move3'];
        }
        if ($request['move1'] !== $request['move4'] && $request['move2'] !== $request['move4'] && $request['move3'] !== $request['move4']) {
            $pokemon->move4_id = $request->validated()['move4'];
        }

        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('images/pokemon', 'public');
            $pokemon->image = $path;
        }

        $pokemon->save();

        return redirect()->route('admin.pokemon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();

        return redirect()->back();
    }
}
