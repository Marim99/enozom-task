<?php

namespace App\Repository;
use App\Models\Trip;

class TripRepository implements TripRepositoryInterface
{
    public function getTripsByStations($fromStationId, $toStationId)
    {
        return Trip::whereHas('tripRoute', function ($query) use ($fromStationId, $toStationId) {
            $query->where('station_id', $fromStationId)
                ->orWhere('station_id', $toStationId);
        })
         ->whereHas('tripRoute', function ($query) use ($fromStationId, $toStationId) {
            $query->join('trip_routes as routes_to', 'routes_to.trip_id', '=', 'trip_routes.trip_id')
                ->where('routes_to.station_id', $toStationId)
                ->where('trip_routes.station_id', $fromStationId)
                ->whereColumn('trip_routes.arrive_time', '<', 'routes_to.arrive_time');
        })
        ->with(['train:id,name'])
        ->get(['id', 'train_id']);
    }
}