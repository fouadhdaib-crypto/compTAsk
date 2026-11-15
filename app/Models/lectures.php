<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lectures extends Model
{
     function users(){

        $this->hasOne(User::class);
    }
}
