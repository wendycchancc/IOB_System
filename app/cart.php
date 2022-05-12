<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
   protected $table = 'cart';
   protected $primaryKey = 'cartId';
   public $timestamps = false;
   protected $fillable = 
    ['createdate','quantity','status','ownerId','itemsId'];
}
