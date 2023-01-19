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
        Schema::create('missions', function (Blueprint $table) {
            $table->id();
            $table->timestamp("dateMission");
            $table->string("startedAt");
            $table->bigInteger("kilometersCounter");
            $table->foreignId('vehicle_id')
                ->constrained('vehicles')
                ->onDelete('no action');
            $table->foreignId('expert_id')
                ->constrained('experts')
                ->onDelete('no action');
            $table->foreignId('garage_id')
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
        Schema::dropIfExists('missions');
    }
};
