<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderitemsunits extends Model
{
   protected $table = 'orderitemsunits';
   protected $primaryKey = 'orderitemsunitsId';
   public $timestamps = false;
   protected $fillable = 
    ['orderitemsId', 'adjustmentstotal', 'createdate'];
}
