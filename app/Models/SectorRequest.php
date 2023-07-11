<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'citizen_id',
        'code',
        'service_id',
        'sector_id',
        'preferred_date',
        'preferred_hour',
        'description',
    ];

    public function citizen()
    {
        return $this->belongsTo(Citizen::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
