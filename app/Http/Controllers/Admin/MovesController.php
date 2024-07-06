<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Move;
use App\Models\Type;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use App\Http\Requests\MoveCreateRequest;
use App\Http\Requests\MoveUpdateRequest;

class MovesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moves = Move::orderByDesc('updated_at')
            ->paginate(10)
        ;

        return view(
            'admin.moves.index',
            [
                'moves' => $moves,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        return view(
            'admin.moves.create',
            ['types' => $types]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MoveCreateRequest $request)
    {
        $move = Move::make();

        $move->name = $request->validated()['name'];
        $move->damage = $request->validated()['damage'];
        $move->type_id = $request->validated()['type'];
        $move->move_descr = $request->validated()['move_descr'];

        $move->save();

        return redirect()->route('admin.moves.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Move $move)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Move $move)
    {
        $types = Type::all();

        return view('admin.moves.edit', compact('move'), ['types' => $types]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MoveUpdateRequest $request, Move $move)
    {
        $move->name = $request->validated()['name'];
        $move->damage = $request->validated()['damage'];
        $move->type_id = $request->validated()['type'];
        $move->move_descr = $request->validated()['move_descr'];

        $move->save();

        return redirect()->route('admin.moves.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Move $move)
    {
        $pokemon = Pokemon::where('move1_id', $move->id)
            ->orWhere('move2_id', $move->id)
            ->orWhere('move3_id', $move->id)
            ->orWhere('move4_id', $move->id)
            ->get();

            //décale les attaques "vers la gauche" lors de la suppression d'une attaque
        foreach ($pokemon as $poke) {
            if ($poke->move1_id == $move->id) {
                if ($poke->move2_id) {
                    $poke->move1_id = $poke->move2_id;

                    if ($poke->move3_id) {
                        $poke->move2_id = $poke->move3_id;

                        if ($poke->move4_id) {
                            $poke->move3_id = $poke->move4_id;
                            $poke->move4_id = null;

                        } else {
                            $poke->move3_id = null;
                        }
                    } else {
                        $poke->move2_id = null;
                    }

                } else {
                    $poke->move1_id = null;
                }


            } elseif ($poke->move2_id == $move->id) {
                if ($poke->move3_id) {
                    $poke->move2_id = $poke->move3_id;

                    if ($poke->move4_id) {
                        $poke->move3_id = $poke->move4_id;
                        $poke->move4_id = null;

                    } else {
                        $poke->move3_id = null;
                    }
                } else {
                    $poke->move2_id = null;
                }

            } elseif ($poke->move3_id == $move->id) {
                if ($poke->move4_id) {
                    $poke->move3_id = $poke->move4_id;
                    $poke->move4_id = null;

                } else {
                    $poke->move3_id = null;
                }

            } elseif ($poke->move4_id == $move->id){
                $poke->move4_id = null;
            }
            $poke->save();
        }

        $move->delete();

        return redirect()->route('admin.moves.index');
    }
}
