<?php

namespace App\Http\Controllers;

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

        // Call the service method to retrieve trips
        $trips = $this->tripService->getTripsByStations($fromStation, $toStation);

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

    // public function getTrips(Request $request)
    // {
    //     $request->validate([
    //         'from_station' => 'required',
    //         'to_station' => 'required',
    //     ]);

    //     $fromStation = $request->input('from_station');
    //     $toStation = $request->input('to_station');

    //     // Retrieve the trips based on the search criteria
    //     $trips = Route::whereHas('fromStation', function ($query) use ($fromStation) {
    //         $query->where('name', $fromStation);
    //     })->whereHas('toStation', function ($query) use ($toStation) {
    //         $query->where('name', $toStation);
    //     })->with('train:id,name')->get(['id', 'train_id']);

    //     if ($trips->isEmpty()) {
    //         return response()->json(['No trains for this route'], 404);
    //     }
    //     $response = [];
    //     foreach ($trips as $trip) {
    //         $response[] = [
    //             'id' => $trip->id,
    //             'train_name' => $trip->train->name,
    //         ];
    //     }

    //     return response()->json($response);
    // }
}
