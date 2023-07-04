<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Citizen extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable =['names','email','password','national_id','telephone'];
}
