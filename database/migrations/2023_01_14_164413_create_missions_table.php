<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpOffice\PhpSpreadsheet\Shared\Trend\Trend;

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
            $table->date("dateMission");
            $table->time("startedAt")->nullable();
            $table->bigInteger("kilometersCounter");
            $table->string("nameExpertFile");
            $table->boolean("isFinished")->default(false);
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
