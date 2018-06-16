@extends('layouts.html')

@section('body')
	
  <div class="container">

    <div class="container">
      <h1>Vendas da Padaria</h1>
    </div>

    <div class="table-responsive">

      <table class="table table-hover">
      
      <tr>
          <th>#</th>
          
          <th>Quantidade</th>
          <th>Data</th>
          <th>ID do Produto</th>
          
      </tr>


       @foreach($pvendas as $pvenda)

          {!!Form::open([
            'method' => 'delete',
            'route' => ['pvenda.destroy', $pvenda->id]
            ])
          !!}


          <tr>
              <td><b>{{$pvenda->id}}</b></td>
              
               <td>{{$pvenda->quantidade}}</td>
                <td>{{$pvenda->data}}</td>
                <td>{{$pvenda->produtos_id}}</td>
              
              <td>

                <a type="button" class="btn btn-warning" href="{{route('pvenda.edit', $pvenda->id)}}">Editar</a>

                {!!Form::submit('Excluir', [
                'class' => 'btn btn-danger'
                  ])
                !!}
    
              </td>
            </tr>

          {!!Form::close()!!}

        @endforeach

      </table>

      <a type="button" class="btn btn-success" href="{{route('pvenda.create')}}">Novo</a>
     <!--  <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/menugravidez">Voltar</a> -->

    </div>

  </div>



@stop