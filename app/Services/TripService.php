<?php
namespace App\Services;

use App\Repository\TripRepository;

class TripService 
{
    protected TripRepository $tripRepository;

    public function __construct()
    {
        $this->tripRepository = new TripRepository();
    }


    public function getTripsByStations($fromStation, $toStation)
    {
        return $this->tripRepository->getTripsByStations($fromStation, $toStation);
    }
}