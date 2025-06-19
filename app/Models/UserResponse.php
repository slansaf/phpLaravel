<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserResponse extends Model
{
    /** @use HasFactory<\Database\Factories\UserResponseFactory> */
    use HasFactory;
     protected $fillable = [
        'name',
        'surname',
        'email',
    ];
}
