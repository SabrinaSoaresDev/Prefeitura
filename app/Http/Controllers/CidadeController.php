<?php

namespace App\Http\Controllers;

use App\Models\cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index()
    {
        return view('Cidade.index', [
            'cidade' => Cidade::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cidade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => ['required'],
            'estado' => ['required'],
            
            
        ]);

     // $cidade = cidade::create($request->only(['nome', 'estado'));
        $cidade = cidade::create($validated);

        return redirect()->route('cidade.show', $cidade);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(cidade $cidade)
    {
        return view('cidade.show', ['cidade' => $cidade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit( Cidade $cidade)
    {
        return view('cidade.edit', ['cidade' => $cidade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cidade $cidade)
    {
        $validated = $request->validate([
            'nome' => ['required'],
            'estado' => ['required'],
            
        ]);

        $cidade->update($validated);

        return redirect()->route('cidade.show', $cidade);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(cidade $cidade)
    {
        $cidade->delete();

        return redirect()->route('cidade.index');
    }
}
