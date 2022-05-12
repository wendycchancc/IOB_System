<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orderinformation extends Model
{
   protected $table = 'orderinformation';
   protected $primaryKey = 'orderinformationId';
   public $timestamps = false;
   protected $fillable = 
    ['address', 'name', 'phone', 'fax',
    'telex','createdate'];
}
