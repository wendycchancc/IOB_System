<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
   protected $table = 'payments';
   protected $primaryKey = 'paymentsId';
   public $timestamps = false;
   protected $fillable = 
    ['payment_state', 'amount', 'payment_details', 'createdate',
    'paymentdate'];
}
