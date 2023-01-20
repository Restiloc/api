<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleExpertView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    private function createView(): string
    {
        return <<<SQL

            CREATE VIEW view_vehicle_expert AS
            SELECT
                vehicles.id,
                vehicles.licencePlate,
                vehicles.color,
                vehicles.releaseYear,
                vehicle_models.label,
                vehicle_models.brand,
                missions.id AS mission_id
            FROM vehicles
                INNER JOIN vehicle_models
                        ON vehicle_models.id = vehicles.vehicle_model_id
                INNER JOIN missions
                        ON missions.vehicle_id = vehicles.id
            WHERE missions.isFinished = 0
            SQL;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    private function dropView(): string
    {
        return <<<SQL

        DROP VIEW IF EXISTS `view_vehicle_expert`;

        SQL;
    }
}
