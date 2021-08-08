<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function user_details()
    {
        return $this->hasOne('App\Models\UserDetail','user_detail_id','user_detail_id');
    }

}