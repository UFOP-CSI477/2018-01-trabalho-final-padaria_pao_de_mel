<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    public $timestamps = false;
	protected $fillable = ['id','quantidade','data', 'produtos_id'];
}
