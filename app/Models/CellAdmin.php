<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CellAdmin extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    public function cell()
    {
        return $this->belongsTo(Cell::class);
    }
}
