@extends ('layouts.html')

@section('body')

<h1><p align="center">Estoque da Padaria</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Quantidade</th>
        <th>ID de Produtos</th>
        
      </tr>

      @foreach($estoque as $e)

      <tr>
        <td>{{ $e->id }}</td>
        <td>{{ $e->quantidade }}</td>
        <td>{{ $e->produtos_id }}</td>
        
      </tr>

      @endforeach

    </table>

        

    @endsection
