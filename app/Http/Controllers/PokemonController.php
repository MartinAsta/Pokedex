<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::paginate(3);

        return view('pokemon.index', [
            'pokemon' => $pokemon,
        ]);
    }

    public function show($id)
    {
        $pokemon = Pokemon::findOrFail($id);

        return view('pokemon.show', [
            'pokemon' => $pokemon,
        ]);
    }
}