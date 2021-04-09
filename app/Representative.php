<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    public function client(){
        return $this->belongsToMany(Client::class);
    }
}
