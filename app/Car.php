<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $table="cars";
    public $timestamps = false;
    protected $fillable = ['owner','plate','chassis','date','type_id'];

     public function typeCardinality()
	{
	    return $this->belongsTo('App\Type', 'type_id', 'id');
	}
}
