@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Produtos da Padaria</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th>Quantidade</th>
          <th>Preço</th>
          
      </tr>


       @foreach($pprodutos as $pproduto)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['pproduto.destroy', $pproduto->id]
            ])
          !!}


          <tr>
              <td><b>{{$pproduto->id}}</b></td>
              <td>{{$pproduto->nome}}</td>
              <td>{{$pproduto->descricao}}</td>
               <td>{{$pproduto->quantidade}}</td>
                <td>{{$pproduto->preco}}</td>
              
              <td>

                <a type="button" class="btn btn-warning" href="{{route('pproduto.edit', $pproduto->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('pproduto.create')}}">Novo</a>
     <!--  <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menugravidez">Voltar</a> -->

    </div>

  </div>



@stop