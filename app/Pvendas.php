<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pvendas extends Model
{ 
	public $timestamps = false;
	protected $fillable = ['quantidade', 'data', 'produtos_id'];
}
