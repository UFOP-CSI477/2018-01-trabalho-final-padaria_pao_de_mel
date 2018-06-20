@extends ('layout.principal')
@section('conteudo')
<h1>Inserir estoque</h1>
<form method="post" action="{{route('estoques.store')}}">
  @csrf
  <p>Quantidade:<input type="number" name="quantidade"></p>
  <p>Id de produtos:<input type="numver" name="produtos_id"></p>
  <p>Enviar<input type="submit" name="btnIncluir" value="Incluir"></p>
</form>
@endsection('conteudo')
