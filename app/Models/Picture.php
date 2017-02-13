<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
    protected $table='pictures';
    protected $fillable=array('picturename','imagepath','create_at','updated_at');
}
