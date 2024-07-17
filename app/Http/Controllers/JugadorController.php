<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index()
    {
        $jugador = Jugador ::orderBy('id', 'desc')->get();
        return view('Jugador.index', compact('jugador'));
    }

    public function create()
    {
        return view('Jugador.create');
    }

    public function store(Request $request)
    {
        $jugador = new Jugador();
        $jugador-> codigo = $request->codigo;
        $jugador-> fecha_nac = $request->fecha_nac;
        $jugador-> nombre = $request-> nombre;
        $jugador-> posicion = $request-> posicion;
      

        $jugador->save();

        // $table->integer('codigo');
        // $table->date('fecha_nac');
        // $table->string('nombre');
        // $table->string('posicion');

        return redirect()->route('Jugador.index');
    }

    public function destroy(Jugador $jugador)
    {
        $jugador -> delete();
        return redirect()->route('Jugador.index');
    }

    public function show(Jugador $jugador)
    {
        return view('Jugador.show', compact('jugador'));
    }

    public function edit(Jugador $jugador)
    {
        return view('Jugador.edit', compact('jugador'));
    }

    public function update(Request $request, Jugador $jugador)
    {
        $jugador-> codigo = $request->codigo;
        $jugador-> fecha_nac = $request->fecha_nac;
        $jugador-> nombre = $request-> nombre;
        $jugador-> posicion = $request-> posicion;
      

        $jugador->save();

        return redirect()->route('Jugador.index');
    }
}



