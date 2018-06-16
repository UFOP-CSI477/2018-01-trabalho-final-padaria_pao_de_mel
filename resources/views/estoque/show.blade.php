@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['pestoque.destroy', $pestoque ->id]
      ])
    !!}
      
      <h1>{{$pestoque->id}}</h1>
      <h1>{{$pestoque->quantidade}}</h1>
      <h1>{{$pestoque->produtos_id}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('pestoque.edit', $pestoque->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop