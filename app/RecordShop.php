<?php

namespace goobus;

use Illuminate\Database\Eloquent\Model;

class RecordShop extends Model
{
     protected $table = "record_shops";
     protected $fillable = [
        'recPrice','recClienBenefit' ,'recDateCreate'
    ];
}
