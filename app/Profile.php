<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\User;

class Profile extends Model
{
    public function user(){
        return $this->hasOne('User', 'id', 'user_id');
    }
}
