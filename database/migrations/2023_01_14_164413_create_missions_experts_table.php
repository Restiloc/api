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
        Schema::create('missions_experts', function (Blueprint $table) {
            $table->id();
            $table->timestamp("dateMission");
            $table->string("startedAt");
            $table->string("kilometersCounter");
            $table->foreignId('licencePlate_id')
                ->reference("licencePlate")
                ->on('vehicles')
                ->onDelete('no action');
            $table->foreignId('experts_id')
                ->constrained('experts')
                ->onDelete('no action');
            $table->foreignId('garages_id')
                ->constrained('garages')
                ->onDelete('no action');
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
        Schema::dropIfExists('missions_experts');
    }
};
