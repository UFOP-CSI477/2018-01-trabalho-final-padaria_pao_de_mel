@extends ('layouts.html')

@section('body')

<h1><p align="center">Produtos da Padaria</p></h1><br><br>

    <table class="table table-striped table-bordered table-hover table-condensed">

      <!--Cabeçalho-->
      <tr>  
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Preço</th>        
      </tr>

      @foreach($produto as $p)

      <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nome }}</td>
        <td>{{ $p->descricao }}</td>
        <td>{{ $p->quantidade }}</td>
        <td>{{ $p->preco }}</td>
        
      </tr>

      @endforeach

    </table>

        

    @endsection
