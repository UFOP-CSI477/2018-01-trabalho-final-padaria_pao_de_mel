@extends ('layouts.html')

@section('body')

<h1><p align="center">Vendas da Padaria</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>       
        <th>Quantidade</th>
        <th>Data</th>
        <th>ID do Produto</th>
       
      </tr>

      @foreach($pvenda as $pvend)

      <tr>
        <td>{{  $pvend ->id }}</td>
       
        <td>{{  $pvend->quantidade }}</td>
        <td>{{  $pvend->data }}</td>
        <td>{{  $pvend->produtos_id }}</td>
       
      </tr>

      @endforeach

    </table>

       <!--  <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menurelatorio">Voltar</a> -->


    @endsection
