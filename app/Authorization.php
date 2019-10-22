<?php

namespace App;

use app\User;
use Illuminate\Database\Eloquent\Model;

class Authorization extends Model
{
    public function user(){
        return $this->hasOne('User', 'id', 'user_id');
    }
}
