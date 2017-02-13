<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class department extends Model
{
    //
	protected $table='department';
	protected $fillable=['name'];
	public function seller(){
		return $this->hasOne('seller');
	}

	public function buyer(){
		return $this->hasMany('buyer');
	}
}
