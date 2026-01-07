<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class DesignExpertise extends Model
{
    protected $fillable = ['id','title','short_description','button_text','image','delete','status'];
}
