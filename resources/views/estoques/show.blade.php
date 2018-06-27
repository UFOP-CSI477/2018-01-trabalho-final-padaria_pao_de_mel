@extends('layout.principal')
@section('conteudo')
<h1> Dados do Estoque</h1>
<p>Codigo:{{$estoque->id}}</p>
<p>Quantidade:{{$estoque->quantidade}}</p>
<p>Id do Produto:{{$estoque->produto_id}}</p>
<a href="/estoques">Voltar</a>
<a href="{{route('estoques.edit',$estoque->id)}}">Editar</a>
<form method="post" action="{{route('estoques.destroy',$estoque->id)}}"
	@csrf
	@method('DELETE')
	<input type="submit" value="Excluir">
</form>

@endsection('conteudo')