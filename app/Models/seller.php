<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\buyer as Buyer;

class seller extends Model
{
    //
    protected $fillable=['name'];
    
    public function department(){
    	return $this->belongsTo('department');
    }

    public function buyer(){
    	return $this->belongsToMany('buyer','sellers_buyers','seller_id','buyer_id');
    }
}
