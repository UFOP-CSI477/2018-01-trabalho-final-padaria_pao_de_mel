<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class PprodutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pprodutos = Pprodutos::all();
        return view('pprodutos.index')
            ->with('pprodutos', $pprodutos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pprodutos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $inputs = $request->all();

        $pprodutos = Pprodutos::Create($inputs);
        
        return redirect()->action('PprodutosController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        $galbun = Galbun::find($id);

        return view('gdiarios.show')
            ->with('gdiario', $gdiario);
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pprodutos = Pprodutos::find($id);

        return view('pprodutos.edit', compact('pprodutos', $pprodutos));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pprodutos = Pprodutos::find($id);

        $pprodutos->nome = $request->nome;
        $pprodutos->descricao = $request->descricao;
        $pprodutos->quantidade = $request->quantidade;  
        $pprodutos->preco = $request->preco;      
        $pprodutos->save();

        return redirect()->action('PprodutosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Product::destroy($id);

        $pprodutos = Pprodutos::find($id)
            ->delete();

        return redirect()->action('PprodutosController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $pprodutos = Pprodutos::all();

        //Invocar a view passando os dados
        return view ('pprodutos.listar') -> with ('pprodutos', $pprodutos);

    }
}