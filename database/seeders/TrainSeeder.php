<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $trips = [
            ['name'=>'Talgo'],
            ['name'=>'French'],
            ['name'=>'Spain'],           
        ];

        foreach($trips as $trip){
            Train::create($trip);
        }
    }
}
