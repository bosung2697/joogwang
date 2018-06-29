<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    protected $table = "Awards";
    protected $fillable = ['title', 'fileimage', 'awarded_date'];
}
