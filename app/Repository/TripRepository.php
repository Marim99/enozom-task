<?php

namespace App\Repository;
use App\Models\Trip;

class TripRepository implements TripRepositoryInterface
{
    public function getTripsByStations($fromStation, $toStation)
    {
        return Trip::whereHas('fromStation', function ($query) use ($fromStation) {
            $query->where('name', $fromStation);
        })->whereHas('toStation', function ($query) use ($toStation) {
            $query->where('name', $toStation);
        })->with('train:id,name')->get(['id', 'train_id']);
    }
}