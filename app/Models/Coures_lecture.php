<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coures_users extends Model
{
    function users(){

        $this->hasOne(User::class);
    }

     function coures(){

        $this->hasOne(courses::class);
    }
}
