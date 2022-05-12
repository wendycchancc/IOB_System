<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shipments extends Model
{
   protected $table = 'shipments';
   protected $primaryKey = 'shipmentsId';
   public $timestamps = false;
   protected $fillable = 
    ['shipment_state', 'shipment_details', 'createdate', 'updatedate',
    'tracking_number'];
}
