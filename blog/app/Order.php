<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function customer(){
    	//echo "test vlue";
    	return $this->belongsTo('\App\Customer');
    }
}
