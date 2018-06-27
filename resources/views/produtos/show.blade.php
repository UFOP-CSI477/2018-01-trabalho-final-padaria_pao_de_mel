@extends('layout.principal')
@section('conteudo')
<h1> Dados do Produto</h1>
<p>Código:{{$produto->id}}</p>
<p>Nome:{{$produto->nome}}</p>
<p>Descrição:{{$produto->descricao}}</p>
<p>Quantidade:{{$produto->quantidade}}</p>
<p>Preço:{{$produto->preco}}</p>

<a href="/produtos">Voltar</a>
<a href="{{route('produtos.edit',$produto->id)}}">Editar</a>
<form method="post" action="{{route('produtos.destroy',$produto->id)}}"
  @csrf
  @method('DELETE')
  <input type="submit" value="Excluir">
</form>

@endsection('conteudo')