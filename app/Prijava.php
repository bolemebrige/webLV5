<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prijava extends Model
{
    //

       public $timestamps = false;

	  protected $fillable = ['rad_id','student_id','status'];
}
