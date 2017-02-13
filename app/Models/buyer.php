<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    //
    protected $fillable=['name'];
    public function seller(){
    	return $this->belongsToMany('seller','sellers_buyers','buyer_id','seller_id');
    }
}
