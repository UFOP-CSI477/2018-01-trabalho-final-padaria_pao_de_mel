<?php

namespace App\Http\Controllers;

use App\Estoque;
use Illuminate\Http\Request;

class EstoquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estoques= Estoque::all();
        return view('estoques.index')->with('estoques',$estoques);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('estoques.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //Validação
        Estoque::create($request->all());
        /*$estado= new Estado;
        $estado->nome=$request->nome;
        $estado->sigla=$request->sigla;
        $estado->save();*/
        session()->flash('mensagem','Estoque inserido com sucesso!');
        return redirect('/estoques');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function show(Estoque $estoque)
    {
        return view('estoques.show')->with('estoque',$estoque);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function edit(Estoque $estoque)
    {
        return view('estoques.edit')->with('estoque',$estoque);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estoque $estoque)
    {
        $estoque->fill($request->all());
        $estoque->save();
        session()->flash('mensagem', 'Estoque atualizado com sucesso!');
        return redirect()->route('estoques.show',$estoque->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estoque $estoque)
    {
        //
    }
}
