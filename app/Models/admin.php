<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{
    use Notifiable;

        protected $table='tbl_admin';
        protected $primaryKey='admin_id';
        protected $guard = 'admin';

        protected $fillable = [
             'email', 'password','name','phone'
        ];
        
        protected $hidden = [
            'password', 'remember_token',
        ];
}
