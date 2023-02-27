<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Pree;
use App\Models\Expert;
use App\Models\Garage;
use App\Models\Reason;
use App\Models\Mission;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use App\Models\Unavailability;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class DatabaseSeeder extends Seeder
{
    protected $output;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Seed the vehicles and models
        $output = new ConsoleOutput();
        $this->command->comment("Seeding the vehicles and models in progress...\n");

        /**
         * Make fake vehicles and models
         */
        $limit = 49;

        $cars = json_decode(file_get_contents(env('CARS_API_URL')), true)['cars'];

        $progressBar = new ProgressBar($output, $limit);

        $progressBar->start();

        foreach ($cars as $key => $car) {
            if ($key > $limit)
                break;

            /**
             * Make fake models
             */
            if (!VehicleModel::where([
                ['label', $car['car_model']],
                ['brand', $car['car']],
            ])->exists()) {
                VehicleModel::create([
                    'label' => $car['car_model'],
                    'brand' => $car['car'],
                ]);
            }

            /**
             * Make fake vehicles
             */
            if (!Vehicle::where('licencePlate', $car['car_vin'])->exists()) {
                Vehicle::create([
                    'licencePlate' => $car['car_vin'],
                    'color' => $car['car_color'],
                    'releaseYear' => $car['car_model_year'],
                    'vehicle_model_id' => VehicleModel::where([
                        ['label', $car['car_model']],
                        ['brand', $car['car']],
                    ])->first()->id,
                ]);
            }

            $progressBar->advance();
        }

        $progressBar->finish();

        // Seed the experts
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding experts in progress...\n");

        /**
         * Make fake experts
         */
        $nbExperts = 20;

        $progressBar = new ProgressBar($output, $nbExperts);

        $progressBar->start();

        Expert::factory()->create([
            'username' => 'admin123',
            'password' => 'password',
        ]);

        for (
            $i = 0;
            $i < $nbExperts;
            $i++
        ) {
            Expert::factory()->create();
            $progressBar->advance();
        }

        $progressBar->finish();

        // Seed the garages
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding garages in progress...\n");

        /**
         * Make fake garages
         */
        $nbGarages = 100;

        $progressBar = new ProgressBar($output, $nbGarages);

        $progressBar->start();

        for (
            $i = 0;
            $i < $nbGarages;
            $i++
        ) {
            Garage::factory()->create();
            $progressBar->advance();
        }

        $progressBar->finish();

        // Seed the clients
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding clients in progress...\n");

        /**
         * Make fake clients
         */
        $nbClients = 50;

        $progressBar = new ProgressBar($output, $nbClients);

        $progressBar->start();

        for (
            $i = 0;
            $i < $nbClients;
            $i++
        ) {
            Client::factory()->create();
            $progressBar->advance();
        }

        $progressBar->finish();

        // Seed the reasons
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding reasons in progress...\n");

        /**
         * Make fake reasons
         */
        $reasons = ["Client absent", "Véhicule inaccessible", "Véhicule absent", "Adresse erronée"];

        $progressBar = new ProgressBar($output, count($reasons));

        $progressBar->start();

        foreach ($reasons as $reason) {
            Reason::factory()->create([
                'label' => $reason
            ]);

            $progressBar->advance();
        }

        $progressBar->finish();

        // Seed the missions
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding missions in progress...\n");

        /**
         * Make fake missions
         */
        $progressBar = new ProgressBar($output, 15);

        $progressBar->start();

        for (
            $i = 0;
            $i < 10;
            $i++
        ) {
            Mission::factory()->create();
            $progressBar->advance();
        }

        Mission::factory(5)->create([
            'isFinished' => false,
        ]);

        $progressBar->advance(5);

        $progressBar->finish();

        // Seed the unavailabilities
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding unavailabilities in progress...\n");
        /**
         * Make fake unavailabilities
         */
        $progressBar = new ProgressBar($output, 10);

        $progressBar->start();

        for (
            $i = 0;
            $i < 10;
            $i++
        ) {
            Unavailability::factory()->create();
            $progressBar->advance();
        }

        $progressBar->finish();

        // Seed the pree
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding pree in progress...\n");

        /**
         * Make fake pree
         */
        $progressBar = new ProgressBar($output, 20);

        $progressBar->start();

        for (
            $i = 0;
            $i < 20;
            $i++
        ) {
            Pree::factory()->create();
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->command->line("\n");
    }
}
