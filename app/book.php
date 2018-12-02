<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
     protected $fillable = ['name', 'author', 'page', 'summary', 'Published_at'];
}
