<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Services\TripService;
use Illuminate\Http\Request;

class TripController extends Controller
{
    //

    protected TripService $tripService;

    public function __construct()
    {
        $this->tripService = new TripService();
    }


    public function getTrips(Request $request)
    {
        // Validate the input
        $request->validate([
            'from_station' => 'required',
            'to_station' => 'required',
        ]);

        $fromStation = $request->input('from_station');
        $toStation = $request->input('to_station');
        $fromStationId = Station::where('id', $fromStation)->value('id');
        $toStationId = Station::where('id', $toStation)->value('id');
        $trips = $this->tripService->getTripsByStations($fromStationId, $toStationId);

        if ($trips->isEmpty()) {
            return response()->json(['No trains for this route'], 404);
        }

        $response = [];
        foreach ($trips as $trip) {
            $response[] = [
                'id' => $trip->id,
                'train_name' => $trip->train->name,
            ];
        }

        return response()->json($response);
    }
}
