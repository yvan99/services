<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CellRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'citizen_id',
        'service_id',
        'cell_id',
        'code',
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

    public function cell()
    {
        return $this->belongsTo(Cell::class);
    }

    public function cellSchedule()
    {
        return $this->hasOne(CellSchedule::class, 'cell_request_id');
    }

}
