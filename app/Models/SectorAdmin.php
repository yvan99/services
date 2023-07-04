<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SectorAdmin extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
