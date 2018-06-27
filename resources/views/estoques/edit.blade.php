@extends ('layout.principal')
@section('conteudo')
<h1>Atualizar estoque:{{$estoque->id}}</h1>
<form method="post" action="{{route('estoques.update',['estoque' => $estoque->id])}}">
	@csrf
	@method('PATCH')
	<p>Quantidade:<input type="number" name="quantidade" value="{{$estoque->quantidade}}"></p>
	<p>ID do Produto:<input type="number" name="produto_id" value="{{$estoque->produto_id}}"></p>
	<p>Atualizar:<input type="submit" name="btnAtualizar" value="Atualizar"></p>
</form>
@endsection('conteudo')
