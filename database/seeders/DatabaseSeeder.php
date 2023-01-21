<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Expert;
use App\Models\Garage;
use App\Models\Mission;
use App\Models\Reason;
use App\Models\Unavailability;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Break_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Make fake vehicles and models
         */
        $cars = json_decode(file_get_contents(env('CARS_API_URL')), true)['cars'];

        foreach ($cars as $key => $car) {
            if ($key > 50)
                break;

            /**
             * Make fake models
             */
            if (!\App\Models\VehicleModel::where([
                ['label', $car['car_model']],
                ['brand', $car['car']],
            ])->exists()) {
                \App\Models\VehicleModel::create([
                    'label' => $car['car_model'],
                    'brand' => $car['car'],
                ]);
            }

            /**
             * Make fake vehicles
             */
            if (!\App\Models\Vehicle::where('licencePlate', $car['car_vin'])->exists()) {
                \App\Models\Vehicle::create([
                    'licencePlate' => $car['car_vin'],
                    'color' => $car['car_color'],
                    'releaseYear' => $car['car_model_year'],
                    'vehicle_model_id' => \App\Models\VehicleModel::where([
                        ['label', $car['car_model']],
                        ['brand', $car['car']],
                    ])->first()->id,
                ]);
            }
        }

        /**
         * Make fake experts
         */
        Expert::factory(20)->create();
        Expert::factory()->create([
            'username' => 'admin123',
            'password' => 'password'
        ]);

        /**
         * Make fake garages
         */
        Garage::factory(100)->create();

        /**
         * Make fake reasons
         */
        $reasons = ["Client absent", "Véhicule inaccessible", "Véhicule absent", "Adresse erronée"];
        foreach ($reasons as $reason) {
            Reason::factory()->create([
                'label' => $reason
            ]);
        }

        /**
         * Make fake missions
         */
        Mission::factory(10)->create();
        Mission::factory(5)->create([
            'isFinished' => false,
        ]);


        /**
         * Make fake unavailabilities
         */
        Unavailability::factory(10)->create();
    }
}
