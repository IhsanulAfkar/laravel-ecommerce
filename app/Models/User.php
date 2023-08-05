<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'password',
        'email',
        'google_id',
        'google_img',
        'cart',
        'balance'
    ];
}
