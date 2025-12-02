<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstrumentoRequest;
use App\Models\Instrumento;

class InstrumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instrumentos = Instrumento::all();
        return view('instrumentos.index', compact('instrumentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instrumentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InstrumentoRequest $request)
    {
        Instrumento::create($request->validated());
        return redirect()->route('instrumentos.index')->with('success', 'Instrumento criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instrumento $instrumento)
    {
        return view('instrumentos.edit', compact('instrumento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InstrumentoRequest $request, Instrumento $instrumento)
    {
        $instrumento->update($request->validated());
        return redirect()->route('instrumentos.index')->with('success', 'Instrumento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instrumento $instrumento)
    {
        $instrumento->delete();
        return redirect()->route('instrumentos.index')->with('success', 'Instrumento deletado com sucesso!');
    }
}