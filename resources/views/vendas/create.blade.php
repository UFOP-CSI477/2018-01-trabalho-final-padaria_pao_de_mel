@extends ('layout.principal')
@section('conteudo')
<h1>Inserir vendas</h1>
<form method="post" action="{{route('vendas.store')}}">
  @csrf
  <p>Quantidade:<input type="number" name="quantidade"></p>
  <p>Data:<input type="date" name="data"></p>
  <p>Id de produtos:<input type="number" name="produto_id"></p>
  <p>Enviar<input type="submit" name="btnIncluir" value="Incluir"></p>
</form>
@endsection('conteudo')
