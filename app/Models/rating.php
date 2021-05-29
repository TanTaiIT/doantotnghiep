<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    use HasFactory;
    protected $table='tbl_rating';
    protected $fillable=[
    	'product_id',
    	'rating'
    ];
    protected $primaryKey='rating_id';
    public function product(){
    	return $this->belongTo('App\Models\product','product_id','rating_id');
    }
    
}
