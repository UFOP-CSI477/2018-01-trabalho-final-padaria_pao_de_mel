@extends ('layouts.html')

@section('body')

<h1><p align="center">Estoque da Padaria</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Preço</th>
       
      </tr>

      @foreach($pproduto as $pprod)

      <tr>
        <td>{{  $pprod ->id }}</td>
        <td>{{  $pprod->nome }}</td>
        <td>{{  $pprod->descricao }}</td>
        <td>{{  $pprod->quantidade }}</td>
        <td>{{  $pprod->preco }}</td>
       
      </tr>

      @endforeach

    </table>

       <!--  <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menurelatorio">Voltar</a> -->


    @endsection
