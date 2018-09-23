<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceModel extends Model
{
    public function listings()
    
    {
    	return $this->hasMany('App\Listing', 'pricing_model');
    }
    public function PriceRating()
	
	{
		return $this->belongsTo('App\PriceRating', 'model_ID','id');
	
	
	}		
}
