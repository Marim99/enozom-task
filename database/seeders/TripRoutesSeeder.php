<?php

namespace Database\Seeders;

use App\Models\TripRoute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripRoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
                //
                $trips = [
                    ['trip_id'=>'1','station_id'=>'1','arrive_time'=>'07:00:00'],
                    ['trip_id'=>'1','station_id'=>'5','arrive_time'=>'09:00:00'],
                    ['trip_id'=>'2','station_id'=>'1','arrive_time'=>'07:30:00'],
                    ['trip_id'=>'2','station_id'=>'3','arrive_time'=>'08:30:00'],
                    ['trip_id'=>'2','station_id'=>'4','arrive_time'=>'09:30:00'],
                    ['trip_id'=>'2','station_id'=>'5','arrive_time'=>'11:30:00'],
                    ['trip_id'=>'3','station_id'=>'1','arrive_time'=>'09:00:00'],
                    ['trip_id'=>'3','station_id'=>'3','arrive_time'=>'10:15:00'],
                    ['trip_id'=>'3','station_id'=>'5','arrive_time'=>'11:30:00'],
                    ['trip_id'=>'4','station_id'=>'5','arrive_time'=>'07:00:00'],
                    ['trip_id'=>'4','station_id'=>'1','arrive_time'=>'09:00:00'],
                    ['trip_id'=>'5','station_id'=>'5','arrive_time'=>'07:30:00'],
                    ['trip_id'=>'5','station_id'=>'4','arrive_time'=>'07:30:00'],
                    ['trip_id'=>'5','station_id'=>'3','arrive_time'=>'08:30:00'],
                    ['trip_id'=>'5','station_id'=>'2','arrive_time'=>'09:30:00'],
                    ['trip_id'=>'5','station_id'=>'1','arrive_time'=>'10:30:00'],
                    ['trip_id'=>'6','station_id'=>'5','arrive_time'=>'09:00:00'],
                    ['trip_id'=>'6','station_id'=>'3','arrive_time'=>'10:15:00'],
                    ['trip_id'=>'6','station_id'=>'1','arrive_time'=>'11:30:00'],
                        
                ];
        
                foreach($trips as $trip){
                    TripRoute::create($trip);
                }
    }
}
