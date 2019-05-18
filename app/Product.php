<?php

namespace goobus;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    
     protected $fillable = [
         
        'pName','pDesc' ,'pPrice','pClientBenefit','cp','pUrl', 'pType','pStars','pTimesBought','pLastUpdate'
    ];
}
