<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class PvendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pvendas = Pvendas::all();
        return view('pvendas.index')
            ->with('pvendas', $pvendas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pvendas.create');
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

        $pvendas = Pvendas::Create($inputs);
        
        return redirect()->action('PvendasController@index');

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
        $pvendas = Pvendas::find($id);

        return view('pvendas.edit', compact('pvendas', $pvendas));

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
        $pvendas = Pvendas::find($id);

        $pvendas->quantidade = $request->quantidade;
        $pvendas->data = $request->data;
        $pvendas->produtos_id = $request->produtos_id;        
        $pvendas->save();

        return redirect()->action('PvendasController@index');
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

        $pvendas = Pvendas::find($id)
            ->delete();

        return redirect()->action('PvendasController@index');

    }

    public function listar() {

        //Acesso ao modelo e recuperação dos dados
        $pvendas = Pvendas::all();

        //Invocar a view passando os dados
        return view ('pvendas.listar') -> with ('pvendas', $pvendas);

    }
}