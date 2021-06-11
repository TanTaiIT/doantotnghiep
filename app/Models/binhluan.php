<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    protected $table="binhluan";
    protected $fillable=[
    	'binhluan',
    	'binhluan_name',
    	'binhluan_date',
        'binhluan_product_id',
    ];
    protected $primaryKey="id";
    public $timestamps = false;
    // public function brand(){
    // 	return $this->hasMany('App\Models\product','brand_id');
    // }
}
