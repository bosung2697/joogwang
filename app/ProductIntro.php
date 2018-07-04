<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductIntro extends Model
{
    protected $table="productintro";
    protected $fillable=['title', 'fileimage'];
    public function admin(){
        return $this->belongsTo(Admin::class);
    }

}