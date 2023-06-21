<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Services\TripService;
use Illuminate\Http\Request;
use TheSeer\Tokenizer\Exception;

class TripController extends Controller
{
    //

    protected TripService $tripService;

    public function __construct()
    {
        $this->tripService = new TripService();
    }

/**
 * @OA\Get(
 *     path="/api/trips",
 *     operationId="getTrips",
 *     summary="Get trips for a specific route",
 *     tags={"Trips"},
 *     @OA\Parameter(
 *         name="from_station",
 *         in="query",
 *         required=true,
 *         @OA\Schema(
 *             type="bigint"
 *         ),
 *         description="The ID  of the departure station"
 *     ),
 *     @OA\Parameter(
 *         name="to_station",
 *         in="query",
 *         required=true,
 *         @OA\Schema(
 *             type="bigint"
 *         ),
 *         description="The ID of the destination station"
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Success",
 *         @OA\JsonContent(
 *             @OA\Property(
 *                 property="trips",
 *                 type="array",
 *                 @OA\Items(
 *                     @OA\Property(property="id", type="integer", description="The trip ID"),
 *                     @OA\Property(property="train_name", type="string", description="The name of the train")
 *                 )
 *             )
 *         )
 *     ),
 *     @OA\Response(response="404", description="No trains for this route")
 * )
 */
    public function getTrips(Request $request)
    {
        // Validate the input
    try {

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


        }catch(Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
