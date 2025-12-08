<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PenggunaAdmin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin_users';
    protected $primaryKey = 'id';
    
    // SESUAIKAN DENGAN FIELD DATABASE
    protected $fillable = [
        'name',    
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        // 'remember_token',
    ];
}