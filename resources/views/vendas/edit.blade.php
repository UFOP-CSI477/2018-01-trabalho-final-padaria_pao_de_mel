@extends ('layout.principal')
@section('conteudo')
<h1>Atualizar vendas:{{$venda->id}}</h1>
<form method="post" action="{{route('vendas.update',['venda' => $venda->id])}}">
  @csrf
  @method('PATCH')
  <p>Quantidade:<input type="number" name="quantidade" value="{{$venda->quantidade}}"></p>
  <p>Data:<input type="date" name="data" value="{{$venda->data}}"></p>
  <p>ID do Produto:<input type="number" name="produto_id" value="{{$venda->produto_id}}"></p>
  <p>Atualizar:<input type="submit" name="btnAtualizar" value="Atualizar"></p>
</form>
@endsection('conteudo')
