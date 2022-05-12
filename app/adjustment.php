<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adjustment extends Model
{
   protected $table = 'adjustment';
   protected $primaryKey = 'adjustmentId';
   public $timestamps = false;
   protected $fillable = 
    ['orderId', 'orderitemsId', 'orderitemsunitsId', 'type',
    'label','amount','createdate'];
}
