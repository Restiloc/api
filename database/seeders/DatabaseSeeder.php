<?php

namespace Database\Seeders;

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
use Symfony\Component\Console\Output\OutputInterface;

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
        $output->writeln('Seeding vehicles and models in progress...');

        /**
         * Make fake vehicles and models
         */
        $limit = 50;

        $cars = json_decode(file_get_contents(env('CARS_API_URL')), true)['cars'];

        $progressBar = new ProgressBar($output, $limit);

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
        $output->writeln('Seeding experts in progress...');


        /**
         * Make fake experts
         */
        $nbExperts = 20;

        $progressBar = new ProgressBar($output, $nbExperts);

        Expert::factory()->create([
            'username' => 'admin123',
            'password' => 'password',
        ]);

        Expert::factory($nbExperts)->create();

        $progressBar->advance();

        $progressBar->finish();

        // Seed the garages
        $output = new ConsoleOutput();
        $output->writeln('Seeding garages in progress...');

        /**
         * Make fake garages
         */
        $nbGarages = 100;

        $progressBar = new ProgressBar($output, $nbGarages);

        Garage::factory($nbGarages)->create();

        $progressBar->advance();

        $progressBar->finish();

        // Seed the reasons
        $output = new ConsoleOutput();
        $output->writeln('Seeding reasons in progress...');

        /**
         * Make fake reasons
         */
        $reasons = ["Client absent", "Véhicule inaccessible", "Véhicule absent", "Adresse erronée"];

        $progressBar = new ProgressBar($output, count($reasons));

        foreach ($reasons as $reason) {
            Reason::factory()->create([
                'label' => $reason
            ]);

            $progressBar->advance();
        }

        $progressBar->finish();

        // Seed the missions
        $output = new ConsoleOutput();
        $output->writeln('Seeding missions in progress...');

        /**
         * Make fake missions
         */
        $progressBar = new ProgressBar($output, 15);

        Mission::factory(10)->create();
        Mission::factory(5)->create([
            'isFinished' => false,
        ]);

        $progressBar->advance();

        $progressBar->finish();

        // Seed the unavailabilities
        $output = new ConsoleOutput();
        $output->writeln('Seeding unavailabilities in progress...');
        /**
         * Make fake unavailabilities
         */
        $progressBar = new ProgressBar($output, 10);

        Unavailability::factory(10)->create();

        $progressBar->advance();

        $progressBar->finish();

        // Seed the pree
        $output = new ConsoleOutput();
        $output->writeln('Seeding pree in progress...');

        /**
         * Make fake pree
         */
        $progressBar = new ProgressBar($output, 50);

        Pree::factory(50)->create();

        $progressBar->advance();

        $progressBar->finish();
    }
}
