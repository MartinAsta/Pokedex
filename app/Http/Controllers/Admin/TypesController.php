<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeCreateRequest;
use App\Http\Requests\TypeUpdateRequest;
use App\Models\Type;
use App\Models\Pokemon;
use App\Models\Moves;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::orderByDesc('updated_at')
            ->paginate(10)
        ;

        return view(
            'admin.types.index',
            [
                'types' => $types,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeCreateRequest $request)
    {
        $type = Type::make();

        $type->name = $request->validated()['name'];
        $type->colour = $request->validated()['colour'];
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('images/typesImages', 'public');
            $type->image = $path;
        }
        $type->save();

        return redirect()->route('admin.types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $types)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $types)
    {
        return view('admin.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeUpdateRequest $request, Type $type)
    {
        $type->name = $request->validated()['name'];
        $type->colour = $request->validated()['colour'];
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('images/typesImages', 'public');
            $type->image = $path;
        }
        $type->save();

        return redirect()->route('admin.types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $pokemons = Pokemon::where('type1_id', $type->id)
            ->orWhere('type2_id', $type->id)
            ->get();

        foreach ($pokemons as $pokemon) {
            if ($pokemon->type1_id == $type->id) {
                if ($pokemon->type2_id) {
                    $pokemon->type1_id = $pokemon->type2_id;
                    $pokemon->type2_id = null;
                } else {
                    $pokemon->type1_id = null;
                }
            } elseif ($pokemon->type2_id == $type->id) {
                $pokemon->type2_id = null;
            }
            $pokemon->save();
        }

        Moves::where('type_id', $type->id)
            ->update(['type_id' => null]);

        $type->delete();

        return redirect()->route('admin.types.index');
    }
}
