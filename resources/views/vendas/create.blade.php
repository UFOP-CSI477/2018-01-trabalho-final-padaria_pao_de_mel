@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open(['route' => 'pvenda.store'], [
        'class' => 'form-horizontal',
      ])
    !!}
      
    <div class = "form-group">

     {!! Form::label('quantidade', 'Quantidade') !!}
      {!! Form::text('quantidade', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a quantidade de vendas",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('data', 'Data') !!}
      {!! Form::text('data', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a data da venda",
        'required' => "",
        ]) 
      !!}

    </div> 
     <div class = "form-group">

     {!! Form::label('produtos_id', 'Produtos') !!}
      {!! Form::text('produtos_id', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o ID do produto",
        'required' => "",
        ]) 
      !!}

    </div> 
     


    

    <div class = "form-group">

      {!!Form::submit('Inserir', [
          'class' => 'btn btn-success'
        ])
      !!}

    </div>

    {!!Form::close()!!}

    <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/pvenda">Voltar</a>


  </div>
  
@stop