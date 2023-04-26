<?php

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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string("licencePlate")->unique();
            $table->string("color");
            $table->integer("releaseYear");

            // Assurance

            $table->foreignId('contract_company_id')
                ->constrained('companies')
                ->onDelete('no action');
            $table->string("contractNumber")
                ->nullable();
            $table->foreignId("contract_guarantee_level_id")
                ->nullable()    
                ->constrained("guarantee_levels")
                ->onDelete('set null');
            $table->datetime("contractEndDate");

            $table->foreignId("vehicle_state_id")
                ->constrained("vehicle_states")
                ->onDelete('no action');
            $table->foreignId("vehicle_model_id")
                ->nullable()
                ->constrained("vehicle_models")
                ->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
