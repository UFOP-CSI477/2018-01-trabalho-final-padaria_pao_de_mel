@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Estoque da Padaria</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          <th>Quantidade</th>
          <th>ID Produtos</th>
          
      </tr>


       @foreach($pestoques as $pestoque)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['pestoque.destroy', $pestoque->id]
            ])
          !!}


          <tr>
              <td><b>{{$pestoque->id}}</b></td>
              <td>{{$pestoque->quantidade}}</td>
              <td>{{$pestoque->produtos_id}}</td>
              
              <td>

                <a type="button" class="btn btn-warning" href="{{route('pestoque.edit', $pestoque->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('pestoque.create')}}">Novo</a>
     <!--  <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menugravidez">Voltar</a> -->

    </div>

  </div>



@stop