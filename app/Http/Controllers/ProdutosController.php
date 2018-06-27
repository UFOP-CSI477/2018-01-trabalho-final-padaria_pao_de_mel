<?php

namespace App\Http\Controllers;

use App\Estoque;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendas= Venda::all();
        return view('vendas.index')->with('vendas',$vendas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('vendas.create');
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
        Venda::create($request->all());
        /*$estado= new Estado;
        $estado->nome=$request->nome;
        $estado->sigla=$request->sigla;
        $estado->save();*/
        session()->flash('mensagem','Venda inserida com sucesso!');
        return redirect('/vendas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function show(Venda $venda)
    {
        return view('vendas.show')->with('venda',$venda);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function edit(Venda $venda)
    {
        return view('vendas.edit')->with('venda',$venda);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venda $venda)
    {
        $venda->fill($request->all());
        $venda->save();
        session()->flash('mensagem', 'Venda atualizada com sucesso!');
        return redirect()->route('vendas.show',$venda->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venda $venda)
    {
        //
    }
}
