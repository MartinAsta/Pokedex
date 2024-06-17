<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(Request $request)
    {
        // Retrieve the search query parameter
        $search = $request->query('search');

        // Define a query to retrieve Pokémon entries
        $query = Pokemon::query();

        // If a search query is provided, filter by id or name
        if ($search) {
            $query->where('id', $search) // Search by id
                ->orWhere('name', 'LIKE', '%' . $search . '%'); // Search by name
        }

        // Order the results by id by default
        $pokemon = $query->orderBy('id')
            ->paginate(12); // Paginate results with 12 entries per page

        // Return the view with the Pokémon data
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