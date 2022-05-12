<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
   protected $table = 'items';
   protected $primaryKey = 'itemsId';
   public $timestamps = false;
   protected $fillable = 
    ['name', 'descriptions', 'stock', 'price',
    'ownerId','image','file','createdate',
    'managementdate','itemcategoryId','delete' ,'status'];
}
