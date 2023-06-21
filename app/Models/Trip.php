<?php

namespace App\Models;
use App\Models\Station;
use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'train_id',
        'from_station_id',
        'to_station_id',
        'arrive_time1',  
        'arrive_time2',  
    ];

    public function train()
{
    return $this->belongsTo(Train::class);
}

public function fromStation()
{
    return $this->belongsTo(Station::class, 'from_station_id');
}

public function toStation()
{
    return $this->belongsTo(Station::class, 'to_station_id');
}
}
