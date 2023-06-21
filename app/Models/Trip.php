<?php

namespace App\Models;
use App\Models\Station;
use App\Models\Train;
use App\Models\TripRoute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'train_id',
    ];
    public function train()
    {
        return $this->belongsTo(Train::class, 'train_id');
    }

    public function tripRoute()
    {
        return $this->hasMany(TripRoute::class, 'trip_id');
    }
}
