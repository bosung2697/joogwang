<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    protected $table = "awards";
    protected $fillable = ['title', 'fileimage', 'awarded_date'];
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
