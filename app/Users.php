<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // Define 'interactions' relationships for users
    public function userInteraction() {
        return $this->hasMany('App/Interactions','user_id'); 
    }
}
