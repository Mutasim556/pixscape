<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    public function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }
}
