<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class DevBase extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [
        'access_token',
        'expires_exp',
    ];
}
