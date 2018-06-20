<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados= Estado::all();
        return view('estoques.index')->with('estoques',$estados);
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
        //
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
        //
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
