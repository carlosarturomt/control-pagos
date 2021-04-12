<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
