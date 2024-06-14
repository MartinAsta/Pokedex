<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pokemon;
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
        return view('admin.pokemon.create');
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
        $pokemon->save();

        return redirect()->route('pokemon.index');
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
        //
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

        $pokemon->save();

        return redirect()->back();
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
