@extends ('layout.principal')
@section('conteudo')
<br>
<!-- URL a partir do nome da rota -->

<a href="{{route('produtos.create')}}">Inserir Produto</a>
  <table>
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Quantidade</th>
      <th>Preço</th>
      <th>Exibir</th>
      <th>Editar</th>
    </tr>

    
@foreach($produtos as $p)
<tr>
  <td>{{$p->id}}</td>
  <td>{{$p->nome}}</td>
  <td>{{$p->descricao}}</td>
   <td>{{$p->quantidade}}</td>
    <td>{{$p->preco}}</td>
  <td><a href="/produtos/{{$p->id}}">Exibir</a></td>
   <td><a href="/produtos/{{$p->id}}">Editar</a></td>
</tr>


@endforeach 
</table>
@endsection('conteudo')

