<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContatosPrefeitura;

class ContatosPrefeituraController extends Controller
{
    public function index()
    {
        return view('ContatosPrefeitura.index', [
            'ContatosPrefeitura' => ContatosPrefeitura::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ContatosPrefeitura.create');
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
            'TerminoMandato' => ['required'],
            'TipoContato' => ['required'],
            
            
        ]);

     // $cidade = cidade::create($request->only(['nome', 'TerminoMandato', 'TipoContato));
        $ContatosPrefeitura = ContatosPrefeitura::create($validated);

        return redirect()->route('ContatosPrefeitura.show', $ContatosPrefeitura);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContatosPrefeitura  $ContatosPrefeitura
     * @return \Illuminate\Http\Response
     */
    public function show(ContatosPrefeitura $ContatosPrefeitura)
    {
        return view('ContatosPrefeitura.show', ['ContatosPrefeitura' => $ContatosPrefeitura]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContatosPrefeitura  $ContatosPrefeitura
     * @return \Illuminate\Http\Response
     */
    public function edit( ContatosPrefeitura $ContatosPrefeitura)
    {
        return view('ContatosPrefeitura.edit', ['ContatosPrefeitura' => $ContatosPrefeitura]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContatosPrefeitura  $ContatosPrefeitura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContatosPrefeitura $ContatosPrefeitura)
    {
        $validated = $request->validate([
            'nome' => ['required'],
            'TerminoMandato' => ['required'],
            'TipoContato' => ['required'],
            
        ]);

        $ContatosPrefeitura->update($validated);

        return redirect()->route('ContatosPrefeitura.show', $ContatosPrefeitura);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContatosPrefeitura  $ContatosPrefeitura
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContatosPrefeitura $ContatosPrefeitura)
    {
        $ContatosPrefeitura->delete();

        return redirect()->route('ContatosPrefeitura.index');
    }
}
