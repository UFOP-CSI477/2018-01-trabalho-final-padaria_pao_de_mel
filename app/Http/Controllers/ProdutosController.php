<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos= Produto::all();
        return view('produtos.index')->with('produtos',$produtos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('produtos.create');
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
        Produto::create($request->all());
        /*$estado= new Estado;
        $estado->nome=$request->nome;
        $estado->sigla=$request->sigla;
        $estado->save();*/
        session()->flash('mensagem','Produto inserido com sucesso!');
        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('produtos.show')->with('produto',$produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('produtos.edit')->with('produto',$produto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->fill($request->all());
        $produto->save();
        session()->flash('mensagem', 'Produto atualizado com sucesso!');
        return redirect()->route('produtos.show',$produto->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
         $produto->delete();
        session()->flash('mensagem','Produto excluido com sucesso');
        return redirect()->route('produtos.index');
    }
    public function listar() {

        
        $produto = Produto::all();

        
        return view ('produtos.listar') -> with ('produto', $produto);

    }
}
