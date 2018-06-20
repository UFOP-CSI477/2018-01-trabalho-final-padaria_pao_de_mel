@extends('layout.principal')
@section('conteudo')
<h1> Dados do Estoque</h1>
<p>Codigo:{{$estoque->id}}</p>
<p>Quantidade:{{$estoque->quantidade}}</p>
<p>Id do Produto:{{$estoque->produtos_id}}</p>
<a href="#">Editar</a>
<a href="#">Excluir</a>
@endsection('conteudo')