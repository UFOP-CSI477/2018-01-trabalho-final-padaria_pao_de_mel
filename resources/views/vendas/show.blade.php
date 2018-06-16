@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['pvenda.destroy', $pvenda ->id]
      ])
    !!}
      
      <h1>{{$pvenda->id}}</h1>      
      <h1>{{$pvenda->quantidade}}</h1>
      <h1>{{$pvenda->data}}</h1>
        <h1>{{$pvenda->produtos_id}}</h1>

      
      <a type="button" class="btn btn-warning" href="{{route('pvenda.edit', $pvenda->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop