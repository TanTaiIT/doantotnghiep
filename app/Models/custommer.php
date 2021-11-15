<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class custommer extends Authenticatable
{
    use Notifiable;
    protected $table="tbl_customers";
    protected $fillable=[
    	'customer_name',
    	'password',
    	'customer_phone',
    	'customer_email',
        'code',
        'code_time',
        'status',
        'ngaytao'
    ];

    public function change_status($status,$email){
        return $this->where('customer_email',$email)->where('status',$status)->first();
    }

    // protected $hidden = [
    //     'customer_password', 'remember_token',
    // ];
    protected $primaryKey="customer_id";
}
