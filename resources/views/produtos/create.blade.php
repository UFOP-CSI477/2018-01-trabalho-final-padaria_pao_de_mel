@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open(['route' => 'pproduto.store'], [
        'class' => 'form-horizontal',
      ])
    !!}
      
    <div class = "form-group">

     {!! Form::label('nome', 'Nome') !!}
      {!! Form::text('nome', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira  o nome",
        'required' => "",
        ]) 
      !!}

    </div> 

    <div class = "form-group">

     {!! Form::label('descricao', 'Descricao') !!}
      {!! Form::text('descricao', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a descrição do produto",
        'required' => "",
        ]) 
      !!}

    </div> 
     <div class = "form-group">

     {!! Form::label('quantidade', 'Quantidade') !!}
      {!! Form::text('quantidade', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira a quantidade de produto",
        'required' => "",
        ]) 
      !!}

    </div> 
     <div class = "form-group">

     {!! Form::label('preco', 'Preço') !!}
      {!! Form::text('preco', null, [
        'class' => "form-control input-md",
        'placeholder' => "Insira o preço do produto",
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

    <a align="center" type="button" class="btn btn-success" href="http://localhost:8000/pproduto">Voltar</a>


  </div>
  
@stop