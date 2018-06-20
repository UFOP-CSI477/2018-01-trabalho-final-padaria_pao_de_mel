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
    <!-- Links -->
<a href="#">Estoque</a>
<a href="#">Vendas</a>
<a href="#">Produtos</a>

<!-- Conteúdo -->
@yield('conteudo')
</body>
</html>