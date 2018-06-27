@extends ('layout.principal')
@section('conteudo')
<br>
<!-- URL a partir do nome da rota -->

<a href="{{route('vendas.create')}}">Inserir Vendas</a>
  <table>
    <tr>
      <th>Código</th>
      <th>Quantidade</th>
      <th>Data</th>
      <th>ID do Produto</th>
      <th>Exibir</th>
      <th>Editar</th>
    </tr>

    
@foreach($vendas as $v)
<tr>
  <td>{{$v->id}}</td>

  <td>{{$v->quantidade}}</td>
   <td>{{$v->data}}</td>
  <td>{{$v->produto_id}}</td>
  <td><a href="/vendas/{{$v->id}}">Exibir</a></td>
  <td><a href="/vendas/{{$v->id}}">Editar</a></td>
</tr>


@endforeach 
</table>
@endsection('conteudo')

