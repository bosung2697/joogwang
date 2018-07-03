<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsRoom extends Model
{
    protected $table="newsroom";
    protected $fillable=['title', 'content', 'fileimage'];
    public function admin(){
        return $this->belongsTo(Admin::class);
    }

}
