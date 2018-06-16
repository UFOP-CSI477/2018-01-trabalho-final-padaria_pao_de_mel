<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class PestoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pestoque = Pestoque::all();
        return view('pestoque.index')
            ->with('pestoque', $pestoque);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pestoque.create');
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

        $pestoque = Pestoque::Create($inputs);
        
        return redirect()->action('PestoqueController@index');

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
        $pestoque = Pestoque::find($id);

        return view('pestoque.edit', compact('pestoque', $pestoque));

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
        $pestoque = Pestoque::find($id);

        $pestoque->quantidade = $request->quantidade;
        
        $pestoque->produtos_id = $request->produtos_id;        
        $pestoque->save();

        return redirect()->action('PestoqueController@index');
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

        $pestoque = Pestoque::find($id)
            ->delete();

        return redirect()->action('PestoqueController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $pestoque = Pestoque::all();

        //Invocar a view passando os dados
        return view ('pestoque.listar') -> with ('pestoque', $pestoque);

    }
}