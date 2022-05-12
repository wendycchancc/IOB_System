<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderitems extends Model
{
   protected $table = 'orderitems';
   protected $primaryKey = 'orderitemsId';
   public $timestamps = false;
   protected $fillable = 
    ['orderId', 'itemsId', 'quantity', 'units_total',
    'adjustments_total','total','createdate'];
}
