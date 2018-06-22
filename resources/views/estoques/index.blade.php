@extends ('layout.principal')
@section('conteudo')
<br>
<!-- URL a partir do nome da rota -->

<a href="{{route('estoques.create')}}">Inserir Estoque</a>
  <table>
    <tr>
      <th>Código</th>
      <th>Quantidade</th>
      <th>ID do Produto</th>
      <th>Ação</th>
    </tr>

    
@foreach($estoques as $e)
<tr>
  <td>{{$e->id}}</td>
  <td>{{$e->quantidade}}</td>
  <td>{{$e->produto_id}}</td>
  <td><a href="/estoques/{{$e->id}}">Exibir</a></td>
</tr>


@endforeach 
</table>
@endsection('conteudo')

