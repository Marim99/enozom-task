<?php

namespace App\Repository;

interface TripRepositoryInterface
{
    public function getTripsByStations($fromStation, $toStation);
}