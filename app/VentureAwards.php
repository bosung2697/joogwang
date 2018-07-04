<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentureAwards extends Model
{
    protected $table = "ventureawards";
    protected $fillable = ['title', 'fileimage', 'awarded_date'];
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
