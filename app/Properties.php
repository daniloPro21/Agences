<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// classes des proprietes
class Properties extends Model
{
    protected $guarded = [];


    public function user(){
        return $this->belongsTo (User::class);
    }

}
