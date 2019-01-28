<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class talk extends Model
{

    protected $fillable = ['talk', 'attendee_id'];
    Public function attendee(){
        return $this->hasMany('App\attendee', 'attendee_id', 'id');
    }
}
