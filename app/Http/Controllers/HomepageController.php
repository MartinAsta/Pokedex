<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Pokemon;

class HomepageController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::paginate(3);

        return view('pokemon.index', [
            'pokemon' => $pokemon,
        ]);
    }
}