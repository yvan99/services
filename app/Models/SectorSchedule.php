<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorSchedule extends Model
{
    use HasFactory;
    protected $table = 'sector_schedule';
    protected $fillable = ['sector_request_id', 'date', 'hour', 'title'];

    public function sectorRequest()
    {
        return $this->belongsTo(SectorRequest::class);
    }
}
