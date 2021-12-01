<?php

namespace App\Http\Controllers;

use App\Models\prefeitura;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class PrefeituraController extends Controller
{
    public function index()
    {
        return view('prefeitura.index', [
            'prefeitura' => prefeitura::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prefeitura.create');
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
            'prefeituraCod' => ['required'],
            'telefone' => ['required',  'unique:prefeitura,telefone'],
            'habitantes' => ['required'],
            
        ]);

     // $prefeitura = prefeitura::create($request->only(['nome', 'prefeituraCod', 'telefone', 'habitantes'));
        $prefeitura = prefeitura::create($validated);

        return redirect()->route('prefeitura.show', $prefeitura);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prefeitura  $prefeitura
     * @return \Illuminate\Http\Response
     */
    public function show(prefeitura $prefeitura)
    {
        return view('prefeitura.show', ['prefeitura' => $prefeitura]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prefeitura  $prefeitura
     * @return \Illuminate\Http\Response
     */
    public function edit(prefeitura $prefeitura)
    {
        return view('prefeitura.edit', ['prefeitura' => $prefeitura]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prefeitura  $prefeitura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prefeitura $prefeitura)
    {
        $validated = $request->validate([
            'nome' => ['required'],
            'prefeituraCod' => ['required'],
            'telefone' => ['required', Rule::unique('prefeitura', 'telefone')->ignore($prefeitura->id)],
            'habitantes' => ['nullable', Rule::unique('prefeitura', 'habitantes')->ignore($prefeitura->id)],
            
        ]);

        $prefeitura->update($validated);

        return redirect()->route('prefeitura.show', $prefeitura);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prefeitura  $prefeitura
     * @return \Illuminate\Http\Response
     */
    public function destroy(prefeitura $prefeitura)
    {
        $prefeitura->delete();

        return redirect()->route('prefeitura.index');
    }
}
