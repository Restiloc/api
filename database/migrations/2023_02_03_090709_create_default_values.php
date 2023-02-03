<?php

use App\Models\Pree;
use App\Models\Expert;
use App\Models\Garage;
use App\Models\Reason;
use App\Models\Mission;
use App\Models\Vehicle;
use App\Models\VehicleModel;
use App\Models\Unavailability;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            'password' => 'alizee123',
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
