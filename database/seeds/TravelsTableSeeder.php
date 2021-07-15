<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTravel = config('travels');

        foreach ($arrayTravel as $item) {
            $travel = new Travel();
            $travel->destination = $item["destination"];
            $travel->duration = $item["duration"];
            $travel->start_day = $item["start_day"];
            $travel->return_day = $item["return_day"];
            $travel->itinerary = $item["itinerary"];
            $travel->price = $item["price"];

            $travel->save();
        }
    }
}
