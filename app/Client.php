<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function services(){
        return $this->belongsToMany(Service::class);
    }

    public function representatives(){
        return $this->belongsToMany(Representative::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
