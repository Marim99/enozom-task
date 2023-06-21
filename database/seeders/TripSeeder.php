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
            ['train_id'=>'1'],
            ['train_id'=>'2'],
            ['train_id'=>'3'],
            ['train_id'=>'1'],
            ['train_id'=>'2'],
            ['train_id'=>'3'],    
        ];

        foreach($trips as $trip){
            Trip::create($trip);
        }
    }
}
