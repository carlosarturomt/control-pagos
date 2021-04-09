<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function service(){
        return $this->belongsTo(Service::class);
    }
}
