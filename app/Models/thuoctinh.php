<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thuoctinh extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table="tbl_attribute_product";
    protected $fillable=[
        'product_id',
        'attr_name',

    ];
    protected $primaryKey="attr_id";
}
