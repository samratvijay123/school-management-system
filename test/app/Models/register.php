<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $table = 'registers';
    protected $fillable = [
        'name', 'email', 'number', 'gender', 'pincode', 'address', 'password',
    ];

    use HasFactory;
}
