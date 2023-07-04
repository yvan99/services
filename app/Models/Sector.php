<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cells()
    {
        return $this->hasMany(Cell::class);
    }

    public function sectorAdmins()
    {
        return $this->hasMany(SectorAdmin::class);
    }
}
