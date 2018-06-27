@extends ('layout.principal')
@section('conteudo')
<h1>Inserir produto</h1>
<form method="post" action="{{route('produtos.store')}}">
  @csrf
  <p>Nome:<input type="text" name="nome"></p>
  <p>Descrição:<input type="text" name="descricao"></p>
  <p>Quantidade:<input type="number" name="quantidade"></p>
  <p>Preço:<input type="number" name="preco"></p>
  
  <p>Enviar<input type="submit" name="btnIncluir" value="Incluir"></p>
</form>
@endsection('conteudo')
