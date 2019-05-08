<?php

namespace goobus;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "persons";
     protected $fillable = [
        'name','lastname' ,'address','country','cp','description', 'phone','artcoins','money','avatar'
    ];
}