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
         * Fake vehicles
         */
        $cars = json_decode(file_get_contents(env('CARS_API_URL')), true)['cars'];

        foreach ($cars as $car) {

            if (!\App\Models\VehicleModel::where([
                ['label', $car['car_model']],
                ['brand', $car['car']],
            ])->exists()) {
                \App\Models\VehicleModel::create([
                    'label' => $car['car_model'],
                    'brand' => $car['car'],
                ]);
            }

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

            if (!\App\Models\Folder::find($car['car_vin'])) {
                \App\Models\Folder::factory()->create([
                    'vehicle_id' => \App\Models\Vehicle::where('licencePlate', $car['car_vin'])->first()->id,
                ]);
            }
        }

        /**
         * Fake experts
         */
        Expert::factory(20)->create();
        Expert::factory()->create([
            'username' => 'admin123',
            'password' => 'password'
        ]);

        /**
         * Fake garages
         */
        Garage::factory(100)->create();

        /**
         * Fake reasons
         */
        $reasons = ["Client absent", "Véhicule inaccessible", "Véhicule absent", "Adresse erronée"];
        foreach ($reasons as $reason) {
            Reason::factory()->create([
                'label' => $reason
            ]);
        }

        /**
         * Fake unavailabilities
         */
        Unavailability::factory(10)->create();

        /**
         * Fake missions
         */
        Mission::factory(10)->create();
    }
}
