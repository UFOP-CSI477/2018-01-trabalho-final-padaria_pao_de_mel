<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pprodutos extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['nome', 'descricao', 'quantidade', 'preco'];
}
