<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    // use HasFactory;
    public $timestamps = true;
    protected $fillable = ['fitst_name'];
}
