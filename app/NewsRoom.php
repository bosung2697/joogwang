<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsRoom extends Model
{
    protected $table="NewsRoom";
    protected $fillable=['title', 'content', 'fileimage'];

}
