<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interactions extends Model
{
    //Define that interactions are tied to a specific user
    public function userInteraction() {
        return $this->belongsTo('App/Users','user_id');
    }
}
