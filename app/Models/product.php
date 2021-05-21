<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table='tbl_product';
    protected $fillable=['product_name','category_id','brand_id','product_desc','product_price','product_image','product_status'];
    protected $primaryKey="product_id";
    public function category(){
    	return $this->belongTo('App\Models\category','category_id','product_id');
    }
    public function brand(){
    	return $this->belongTo('App\Models\brand','brand_id','product_id');
    }
}
