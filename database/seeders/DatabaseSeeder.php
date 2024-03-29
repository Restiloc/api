<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Company;
use App\Models\Pree;
use App\Models\Expert;
use App\Models\Garage;
use App\Models\GuaranteeLevel;
use App\Models\Reason;
use App\Models\Mission;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use App\Models\Unavailability;
use App\Models\VehicleState;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class DatabaseSeeder extends Seeder
{
    private int $nbCompanies = 5;
    private int $nbVehicles = 15;
    private int $nbGarages = 5;
    private int $nbClients = 5;
    private int $nbMissions = 50;
    private int $nbUnavailabilities = 20;
    private int $nbPree = 5;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Seed the vehicles states
        $output = new ConsoleOutput();
        $this->command->comment("Seeding vehicles states in progress...\n");

        /**
         * Make fake vehicles states
         */
        $states = [
            "Réparable",
            "Non réparable",
            "Dangereux"
        ];

        $progressBar = new ProgressBar($output, count($states));

        $progressBar->start();

        foreach ($states as $state) {
            VehicleState::factory()->create([
                'label' => $state
            ]);
            $progressBar->advance();
        }

        // Seed the guarantees levels
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding guanratees levels in progress...\n");

        /**
         * Make fake vehicles states
         */
        $states = [
            "Tous riques",
            "Tiers",
        ];

        $progressBar = new ProgressBar($output, count($states));

        $progressBar->start();

        foreach ($states as $state) {
            GuaranteeLevel::factory()->create([
                'label' => $state
            ]);
            $progressBar->advance();
        }

        // Seed the companies
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding companies in progress...\n");

        /**
         * Make fake companies
         */
        $companies = [
            [
                "MAIF Assurance Strasbourg Etoile",
                "18 route de Polygone",
                "67000",
                "Strasbourg",
                "03 88 14 33 00"
            ],
            [
                "MATMUT",
                "1/3 Rue Sait-Aloise",
                "67100",
                "Strasbourg",
                "03 88 14 33 00"
            ],
            [
                "AXA Assurance",
                "6 Quai Kléber",
                "",
                "",
                "03 88 14 33 00"
            ]
        ];

        $progressBar = new ProgressBar($output, count($companies));

        $progressBar->start();

        foreach ($companies as $company) {
            Company::factory()->create([
                'name' => $company[0],
                'address' => $company[1],
                'postalCode' => $company[2],
                'city' => $company[3],
                'phoneNumber' => $company[4],
            ]);
            $progressBar->advance();
        }

        $progressBar->finish();

        // Seed the vehicles and models
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding the vehicles and models in progress...\n");

        /**
         * Make fake vehicles and models
         */
        $nbVehicles = $this->nbVehicles;

        $cars = json_decode(file_get_contents(env('CARS_API_URL')), true)['cars'];

        $progressBar = new ProgressBar($output, $nbVehicles);

        $progressBar->start();

        foreach ($cars as $key => $car) {
            if ($key > $nbVehicles)
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
                    'contract_company_id' => Company::inRandomOrder()->first()->id,
                    'contractNumber' => rand(100000, 999999),
                    'contract_guarantee_level_id' => GuaranteeLevel::all()->random()->id,
                    'contractEndDate' => date('Y-m-d H:i:s', strtotime('+ ' . rand(1, 3) . ' years')),
                    'vehicle_state_id' => VehicleState::all()->random()->id,
                    'vehicle_model_id' => VehicleModel::where([
                        ['label', $car['car_model']],
                        ['brand', $car['car']],
                    ])->first()->id,
                ]);
            }

            $progressBar->advance();
        }

        $progressBar->finish();

        // Seed the garages
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding garages in progress...\n");

        /**
         * Make fake garages
         */
        $nbGarages = $this->nbGarages;

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
        $nbClients = $this->nbClients;

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
        $nbMissions = $this->nbMissions;

        $progressBar = new ProgressBar($output, $nbMissions);

        $progressBar->start();

        for (
            $i = 0;
            $i < $nbMissions;
            $i++
        ) {
            $mission = Mission::factory()->create();

            if ($mission->type === 'Garage') {
                $mission->garage_id = Garage::all()->random()->id;
            } elseif ($mission->type === 'Client') {
                $mission->client_id = Client::all()->random()->id;
            }
            $mission->save();

            $progressBar->advance();
        }

        $progressBar->finish();

        // Seed the unavailabilities
        $output = new ConsoleOutput();
        $this->command->comment("\n\nSeeding unavailabilities in progress...\n");
        /**
         * Make fake unavailabilities
         */
        $nbUnavailabilities = $this->nbUnavailabilities;

        $progressBar = new ProgressBar($output, $nbUnavailabilities);

        $progressBar->start();

        for (
            $i = 0;
            $i < $nbUnavailabilities;
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
        $nbPree = $this->nbPree;

        $progressBar = new ProgressBar($output, $nbPree);

        $progressBar->start();

        for (
            $i = 0;
            $i < $nbPree;
            $i++
        ) {
            Pree::factory()->create();
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->command->line("\n");
    }
}
