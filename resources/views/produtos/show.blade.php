@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['pproduto.destroy', $pproduto ->id]
      ])
    !!}
      
      <h1>{{$pproduto->id}}</h1>
       <h1>{{$pproduto->nome}}</h1>
        <h1>{{$pproduto->descricao}}</h1>
      <h1>{{$pproduto->quantidade}}</h1>
      <h1>{{$pproduto->preco}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('pproduto.edit', $pproduto->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop