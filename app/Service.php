<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function clients(){
        return $this->belongsToMany(Client::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }
}
