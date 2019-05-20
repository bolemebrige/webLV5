<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   public $timestamps = false;

	  protected $fillable = ['id','naziv','naziv_eng','zadatak','studij','mentor_id'];
    //
}
