<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendee extends Model
{
        protected $fillable = ['attendee'];

    Public function talk(){
        return $this->belongsTo('App\talk', 'attendee_id', 'id');
    }
}
