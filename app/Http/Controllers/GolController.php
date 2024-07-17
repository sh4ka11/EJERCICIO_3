<?php

namespace App\Http\Controllers;

use App\Models\Gol;
use Illuminate\Http\Request;

class GolController extends Controller
{
    public function index()
    {
        $gol = Gol ::orderBy('id', 'desc')->get();
        return view('Gol.index', compact('gol'));
    }

    public function create()
    {
        return view('Gol.create');
    }

    public function store(Request $request)
    {
        $gol = new Gol();
        $gol-> codigo = $request->codigo;
        $gol-> minuto = $request->minuto;
        $gol-> desc = $request->desc;
     

        $gol->save();

        // $table->integer('codigo');
        // $table->integer('minuto');
        // $table->string('desc');

        return redirect()->route('Gol.index');
    }

    public function destroy(Gol $gol)
    {
        $gol -> delete();
        return redirect()->route('Gol.index');
    }

    public function show(Gol $gol)
    {
        return view('Gol.show', compact('gol'));
    }

    public function edit(Gol $gol)
    {
        return view('Gol.edit', compact('gol'));
    }

    public function update(Request $request, Gol $gol)
    {
        $gol-> codigo = $request->codigo;
        $gol-> minuto = $request->minuto;
        $gol-> desc = $request->desc;
     

        $gol->save();

        return redirect()->route('Gol.index');
    }
}

