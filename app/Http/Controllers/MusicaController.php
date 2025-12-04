<?php

namespace App\Http\Controllers;

use App\Models\Musica;
use Illuminate\Http\Request;

class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musicas = Musica::all();
        return view('musicas.index', compact('musicas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('musicas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MusicaRequest $request)
    {
        Musica::create($request->validated());
        return redirect()->route('musicas.index')->with('success', 'Música criada com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Musica $musica)
    {
        return view('musicas.edit', compact('musica'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MusicaRequest $request, Musica $musica)
    {
        $musica->update($request->validated());
        return redirect()->route('musicas.index')->with('success', 'Música atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Musica $musica)
    {
        $musica->delete();
        return redirect()->route('musicas.index')->with('success', 'Música deletada com sucesso!');
    }
}
