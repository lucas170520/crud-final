<?php

namespace App\Http\Controllers;

use App\Models\Ensaio;
use Illuminate\Http\Request;
use App\Http\Requests\EnsaioRequest;

class EnsaioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ensaios = Ensaio::all();
        return view('ensaios.index', compact('ensaios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ensaios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EnsaioRequest $request)
    {
        Ensaio::create($request->validated());
        return redirect()->route('ensaios.index')->with('success', 'Ensaio marcado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ensaio $ensaio)
    {
        return view('ensaios.edit', compact('ensaio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EnsaioRequest $request, Ensaio $ensaio)
    {
        $ensaio->update($request->validated());
        return redirect()->route('ensaios.index')->with('success', 'Ensaio atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ensaio $ensaio)
    {
        $ensaio->delete();
        return redirect()->route('ensaios.index')->with('success', 'Ensaio cancelado com sucesso!');
    }
}
