<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function cellAdmins()
    {
        return $this->hasMany(CellAdmin::class);
    }
}
