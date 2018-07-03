<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table="equipment";
    protected $fillable=['title', 'content', 'fileimage'];
    public function admin(){
        return $this->belongsTo(Admin::class);
    }

}