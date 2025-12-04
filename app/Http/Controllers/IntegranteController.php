<?php

namespace App\Http\Controllers;

use App\Models\Integrante;
use Illuminate\Http\Request;
use App\Http\Requests\IntegranteRequest;

class IntegranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $integrantes = Integrante::all();
        return view('integrantes.index', compact('integrantes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('integrantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IntegranteRequest $request)
    {
        Integrante::create($request->validated());
        return redirect()->route('integrantes.index')->with('success', 'Integrante criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Integrante $integrante)
    {
        return view('integrantes.edit', compact('integrante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IntegranteRequest $request, Integrante $integrante)
    {
        $integrante->update($request->validated());
        return redirect()->route('integrantes.index')->with('success', 'Integrante atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Integrante $integrante)
    {
        $integrante->delete();
        return redirect()->route('integrantes.index')->with('success', 'Integrante deletado com sucesso!');
    }
}
