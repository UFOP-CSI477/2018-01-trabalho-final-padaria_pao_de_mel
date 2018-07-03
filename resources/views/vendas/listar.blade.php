@extends ('layouts.html')

@section('body')

<h1><p align="center">Vendas da Padaria</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Quantidade</th>
        <th>Data</th>
        <th>ID de Produtos</th>
        
      </tr>

      @foreach($venda as $v)

      <tr>
        <td>{{ $v->id }}</td>
        <td>{{ $v->quantidade }}</td>
         <td>{{ $v->data }}</td>
        
        <td>{{ $v->produtos_id }}</td>
        
      </tr>

      @endforeach

    </table>

        

    @endsection
