<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    // i prefer to use more relevant and specific name for model.
    //this model is using for phone product i named it this way.
   protected $table = 'products';   //set the table for Model.
}
