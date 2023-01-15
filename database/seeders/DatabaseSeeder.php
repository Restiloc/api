<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Expert;
use App\Models\Garage;
use App\Models\Reason;
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

            if (!\App\Models\Vehicle::find($car['car_vin'])) {
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
                    'vehicle_licencePlate' => \App\Models\Vehicle::find($car['car_vin'])->licencePlate,
                ]);
            }
        }

        Expert::factory(20)->create();
        Expert::factory()->create([
            'username' => 'admin123',
            'password' => 'password'
        ]);

        Garage::factory(100)->create();

        $reasons = ["Client absent", "Véhicule inaccessible", "Véhicule absent", "Adresse erronée"];
        foreach ($reasons as $reason) {
            Reason::factory()->create([
                'label' => $reason
            ]);
        }
    }
}
