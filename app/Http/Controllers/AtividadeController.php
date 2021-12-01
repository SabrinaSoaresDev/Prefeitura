<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atividades;

class AtividadeController extends Controller
{
    public function index()
    {
        return view('Atividade.index', [
            'Atividade' => Atividades::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Atividade.create');
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
            'Tipo' => ['required'],
            'HorarioPrevisto' => ['required'],
            'receptividade' => ['required'],
            'obs' => ['required'],
            'pendencias' => ['required'],
            'status' => ['required'],
            'AtividadesCod' => ['required'],
            
        ]);

     // $Atividade = Atividade::create($request->only(['tipo', 'horarioPrevisto', 'receptividade', 'obs', 'pendencias', 'status', 'atividadesCod' ));
        $Atividade = Atividades::create($validated);

        return redirect()->route('cidade.show', $Atividade);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atividade  $Atividade
     * @return \Illuminate\Http\Response
     */
    public function show(Atividades $Atividade)
    {
        return view('Atividade.show', ['Atividade' => $Atividade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atividade  $Atividade
     * @return \Illuminate\Http\Response
     */
    public function edit( Atividades $Atividade)
    {
        return view('Atividade.edit', ['Atividade' => $Atividade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atividade  $Atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atividades $Atividade)
    {
        $validated = $request->validate([
            'Tipo' => ['required'],
            'HorarioPrevisto' => ['required'],
            'receptividade' => ['required'],
            'obs' => ['required'],
            'pendencias' => ['required'],
            'status' => ['required'],
            'AtividadesCod' => ['required'],
            
        ]);

        $Atividade->update($validated);

        return redirect()->route('Atividade.show', $Atividade);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atividade  $Atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atividades $Atividade)
    {
        $Atividade->delete();

        return redirect()->route('Atividade.index');
    }
}
