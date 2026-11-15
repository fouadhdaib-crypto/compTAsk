<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    function Enrolment(){
        $this->hasMany(Coures_users::class);
    }
}
