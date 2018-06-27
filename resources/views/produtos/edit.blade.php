@extends ('layout.principal')
@section('conteudo')
<h1>Atualizar produtos:{{$produto->id}}</h1>
<form method="post" action="{{route('produtos.update',['produto' => $produto->id])}}">
  @csrf
  @method('PATCH')
   <p>Nome:<input type="text" name="nome" value="{{$produto->nome}}"></p>
   <p>Descrição:<input type="text" name="descricao" value="{{$produto->descricao}}"></p>
  <p>Quantidade:<input type="number" name="quantidade" value="{{$estoque->quantidade}}"></p>
  <p>ID do Produto:<input type="number" name="produto_id" value="{{$estoque->produto_id}}"></p>
  <p>Atualizar:<input type="submit" name="btnAtualizar" value="Atualizar"></p>
</form>
@endsection('conteudo')
