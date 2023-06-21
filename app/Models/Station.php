<?php

namespace App\Models;

use App\Models\Route;
use App\Models\Trip;
use App\Models\TripRoute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function fromRoutes()
{
    return $this->hasMany(Trip::class, 'from_station_id');
}

public function toRoutes()
{
    return $this->hasMany(Trip::class, 'to_station_id');
}

public function tripRoute()
{
    return $this->hasMany(TripRoute::class);
}
}
