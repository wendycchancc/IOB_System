<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemcategory extends Model
{
   protected $table = 'itemcategory';
   protected $primaryKey = 'itemcategoryId';
   public $timestamps = false;
   protected $fillable = 
    ['name', 'managementdate', 'createdate', 'delete'];
}
