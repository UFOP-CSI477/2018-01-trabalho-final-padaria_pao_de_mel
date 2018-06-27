@extends('layout.principal')
@section('conteudo')
<h1> Dados de Vendas</h1>
<p>Codigo:{{$venda->id}}</p>
<p>Quantidade:{{$venda->quantidade}}</p>
<p>Data:{{$venda->data}}</p>
<p>Id do Produto:{{$venda->produtos_id}}</p>
<a href="/vendas">Voltar</a>
<a href="{{route('vendas.edit',$venda->id)}}">Editar</a>
<form method="post" action="{{route('vendas.destroy',$venda->id)}}"
  @csrf
  @method('DELETE')
  <input type="submit" value="Excluir">
</form>

@endsection('conteudo')