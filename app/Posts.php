<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['title','body','year'];
    protected $dates = ['created_at','updated_at'];
}
