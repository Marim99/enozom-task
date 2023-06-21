<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $trips = [
            ['train_id'=>'1','from_station_id'=>'1','to_station_id'=>'5','arrive_time1'=>'07:00:00','arrive_time2'=>'09:00:00'],
            ['train_id'=>'1','from_station_id'=>'5','to_station_id'=>'1','arrive_time1'=>'07:00:00','arrive_time2'=>'09:00:00'],
            ['train_id'=>'2','from_station_id'=>'1','to_station_id'=>'3','arrive_time1'=>'07:30:00','arrive_time2'=>'08:30:00'],
            ['train_id'=>'2','from_station_id'=>'1','to_station_id'=>'4','arrive_time1'=>'07:30:00','arrive_time2'=>'09:30:00'],
            ['train_id'=>'2','from_station_id'=>'1','to_station_id'=>'5','arrive_time1'=>'07:30:00','arrive_time2'=>'10:30:00'],
            ['train_id'=>'2','from_station_id'=>'3','to_station_id'=>'4','arrive_time1'=>'08:30:00','arrive_time2'=>'09:30:00'],
            ['train_id'=>'2','from_station_id'=>'3','to_station_id'=>'5','arrive_time1'=>'08:30:00','arrive_time2'=>'10:30:00'],
            ['train_id'=>'2','from_station_id'=>'4','to_station_id'=>'5','arrive_time1'=>'09:30:00','arrive_time2'=>'10:30:00'],
            ['train_id'=>'2','from_station_id'=>'5','to_station_id'=>'4','arrive_time1'=>'07:00:00','arrive_time2'=>'07:30:00'],
            ['train_id'=>'2','from_station_id'=>'5','to_station_id'=>'3','arrive_time1'=>'07:00:00','arrive_time2'=>'08:30:00'],
            ['train_id'=>'2','from_station_id'=>'5','to_station_id'=>'2','arrive_time1'=>'07:00:00','arrive_time2'=>'09:30:00'],
            ['train_id'=>'2','from_station_id'=>'5','to_station_id'=>'1','arrive_time1'=>'07:00:00','arrive_time2'=>'11:30:00'],
            ['train_id'=>'2','from_station_id'=>'4','to_station_id'=>'3','arrive_time1'=>'07:30:00','arrive_time2'=>'08:30:00'],
            ['train_id'=>'2','from_station_id'=>'4','to_station_id'=>'2','arrive_time1'=>'07:30:00','arrive_time2'=>'09:30:00'],
            ['train_id'=>'2','from_station_id'=>'4','to_station_id'=>'1','arrive_time1'=>'07:30:00','arrive_time2'=>'10:30:00'],
            ['train_id'=>'2','from_station_id'=>'3','to_station_id'=>'2','arrive_time1'=>'08:30:00','arrive_time2'=>'09:30:00'],
            ['train_id'=>'2','from_station_id'=>'3','to_station_id'=>'1','arrive_time1'=>'08:30:00','arrive_time2'=>'10:30:00'],
            ['train_id'=>'2','from_station_id'=>'2','to_station_id'=>'1','arrive_time1'=>'09:30:00','arrive_time2'=>'10:30:00'],
            ['train_id'=>'3','from_station_id'=>'1','to_station_id'=>'3','arrive_time1'=>'09:00:00','arrive_time2'=>'10:15:00'],
            ['train_id'=>'3','from_station_id'=>'1','to_station_id'=>'5','arrive_time1'=>'09:00:00','arrive_time2'=>'11:30:00'],
            ['train_id'=>'3','from_station_id'=>'3','to_station_id'=>'5','arrive_time1'=>'10:15:00','arrive_time2'=>'11:30:00'],
            ['train_id'=>'3','from_station_id'=>'5','to_station_id'=>'3','arrive_time1'=>'09:00:00','arrive_time2'=>'10:15:00'],
            ['train_id'=>'3','from_station_id'=>'5','to_station_id'=>'1','arrive_time1'=>'09:00:00','arrive_time2'=>'11:30:00'],
            ['train_id'=>'3','from_station_id'=>'3','to_station_id'=>'1','arrive_time1'=>'10:15:00','arrive_time2'=>'11:30:00'],       
        ];

        foreach($trips as $trip){
            Trip::create($trip);
        }
    }
}
