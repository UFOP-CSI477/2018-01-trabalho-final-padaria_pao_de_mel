@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($pproduto, [
      'method' => 'patch',
      'route' => ['galbun.update', $pproduto->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $pproduto->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    
    <div class = "form-group">

      {!! Form::label('nome', 'Nome') !!}
      {!! Form::text('nome', $pproduto->nome, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o nome",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('descricao', 'Descrição') !!}
      {!! Form::text('descricao', $pproduto->descricao, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a descrição do produto",
        'required' => "",
        ]) 
      !!}

    </div> 
    <div class = "form-group">

      {!! Form::label('quantidade', 'Quantidade') !!}
      {!! Form::text('quantidade', $pproduto->quantidade, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a quantidade do produto",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('preco', 'Preço') !!}
      {!! Form::text('preco', $pproduto->preco, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o preço do produto",
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