@extends ('layouts.html')

@section('body')

<h1><p align="center">Estoque da Padaria</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Quantidade</th>
        <th>ID dos Produtos</th>
       
      </tr>

      @foreach($pestoque as $pes)

      <tr>
        <td>{{ $pes->id }}</td>
        <td>{{ $pes->quantidade }}</td>
        <td>{{ $pes->produtos_id }}</td>
       
      </tr>

      @endforeach

    </table>

       <!--  <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menurelatorio">Voltar</a> -->


    @endsection
