<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Padaria Pão de Mel</title>
    <link rel="stylesheet" href="{{ asset('./css/app.css')}}">
</head>
<body>
    <!-- Flash: mensagem -->
    @if(Session::has('mensagem'))
    <h2>{{Session::get('mensagem')}}</h2>
    @endif
    <!-- Usuário autenticado -->
	@if(Auth::check())
	<nav class="navbar navbar-light bg-secondary">
		<span class="text-white"> Usuario:{{Auth::user()->nome}}
			@if(Auth::user()->type==2)
				Administrador do Sistema
			@else
				Usuário
			@endif
		</span>
	</nav>
	@endif
    <!-- Links -->
<a href="/estoques">Estoque</a>
<a href="/vendas">Vendas</a>
<a href="/produtos">Produtos</a>

<!-- Conteúdo -->
@yield('conteudo')
</body>
</html>