<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['title','trailer','content','featured_image'];
}
