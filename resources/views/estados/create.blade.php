@extends ('layout.principal')
@section('conteudo')
<h1>Inserir estado</h1>
<form method="post" action="{{route('estados.store')}}">
	<p>Nome:<input type="text" name="nome"></p>
	<p>Sigla:<input type="text" name="sigla"></p>
	<p>Nome:<input type="submit" name="btnIncluir" value="Incluir"></p>
</form>
@endsection('conteudo')
