<?php

namespace Modules\Amoshop\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['customer_id','total','products','name','surname','address','email','phone','discount','type'];
}
