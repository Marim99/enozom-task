<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $stations = [
            ['name'=>'Alexandria'],
            ['name'=>'Damanhour'],
            ['name'=>'Tanta'],           
            ['name'=>'Banha'],           
            ['name'=>'Cairo'],           
        ];

        foreach($stations as $station){
            Station::create($station);
        }
    }
}
