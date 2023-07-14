<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CellSchedule extends Model
{
    use HasFactory;
    protected $fillable = ['cell_request_id', 'date', 'hour', 'title'];

    public function cellRequest()
    {
        return $this->belongsTo(CellRequest::class);
    }
}
