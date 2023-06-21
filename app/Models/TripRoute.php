<?php

namespace App\Models;

use App\Models\Station;
use App\Models\Trip;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripRoute extends Model
{
    use HasFactory;
        protected $fillable = [
        'trip_id',
        'station_id',
        'arrive_time',   
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}
