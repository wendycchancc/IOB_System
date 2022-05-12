<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
   protected $table = 'order';
   protected $primaryKey = 'orderId';
   public $timestamps = false;
   protected $fillable = 
    ['items_total', 'adjustments_total', 'total', 'order_state',
    'orderinformationId','ownerId','shipmentsId','paymentsId',
    'createdate','managementdate'];
}
