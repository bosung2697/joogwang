<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table="Equipment";
    protected $fillable=['title', 'content', 'fileimage'];

}