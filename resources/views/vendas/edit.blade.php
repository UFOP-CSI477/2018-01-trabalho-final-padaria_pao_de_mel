@extends('layouts.html')

@section('body')

  <div class = "container">

    {!!Form::model($pvenda, [
      'method' => 'patch',
      'route' => ['galbun.update', $pvenda->id],
      'class' => 'form-horizontal',
      ])
    !!}

    <div class = "form-group">

      {!! Form::label('id', 'ID') !!}
      {!! Form::text('id', $pvenda->id, [
        'class' => "form-control input-md",
        'disabled ' => "",
        ]) 
      !!}

    </div> 
    
    <div class = "form-group">

      {!! Form::label('quantidade', 'Quantidade') !!}
      {!! Form::text('quantidade', $pvenda->quantidade, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a quantidade de vendas",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

      {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', $pvenda->data, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data da Venda",
        'required' => "",
        ]) 
      !!}

    </div> 
    <div class = "form-group">

      {!! Form::label('produtos_id', 'Produtos') !!}
      {!! Form::text('produtos_id', $pvenda->produtos_id, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o ID do produto vendido",
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