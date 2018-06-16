@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($pestoque, [
      'method' => 'patch',
      'route' => ['galbun.update', $pestoque->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $pestoque->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    
    <div class = "form-group">

      {!! Form::label('quantidade', 'quantidade') !!}
      {!! Form::text('quantidade', $pestoque->quantidade, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a quantidade",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('produtos_id', 'Produtos') !!}
      {!! Form::text('produtos_id', $pestoque->produtos_id, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o ID do produto",
        'required' => "",
        ]) 
      !!}

    </div> 

    

    <div class = "form-group">

      {!!Form::submit('Editar', [
          'class' => 'btn btn-warning'
        ])
      !!}

    </div>

    {!!Form::close()!!}

  </div>

@stop