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
}
