<?php

use App\Models\Insurance;
use App\Models\Expert;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Expert::create([
            'lastName' => "HETT",
            'firstName' => "Alizée",
            'email' => "ali.he@gmail.fr",
            'email_verified_at' => now(),
            'phoneNumber' => "0685256893",
            'username' => "ali.he",
            'password' => 'password123',
        ]);

        Expert::create([
            'lastName' => "SACCO",
            'firstName' => "Vladi",
            'email' => "sac.vla@gmail.fr",
            'email_verified_at' => now(),
            'phoneNumber' => "0685258852",
            'username' => "vla.sac",
            'password' => 'password123',
        ]);

        Expert::create([
            'lastName' => "HENRY",
            'firstName' => "Alexis",
            'email' => "hen.ale@gmail.fr",
            'email_verified_at' => now(),
            'phoneNumber' => "0685258965",
            'username' => "ale.hen",
            'password' => 'password123',
        ]);

        Insurance::create([
            'name' => "MAIF",
            'addressNumber' => "18",
            'street' => "route de Polygone",
            'postalCode' => "67000",
            'city' => "Strasbourg",
            'phoneNumber' => "0972721515",
        ]);

        Insurance::create([
            'name' => "MATMUT",
            'addressNumber' => "1/3",
            'street' => "rue Saint Aloise",
            'postalCode' => "67100",
            'city' => "Strasbourg",
            'phoneNumber' => "0388659778",
        ]);

        Insurance::create([
            'name' => "AXA",
            'addressNumber' => "6",
            'street' => "Quai Kleber",
            'postalCode' => "67000",
            'city' => "Strasbourg",
            'phoneNumber' => "0388150490",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
