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
            $table->time("startedAt");
            $table->bigInteger("kilometersCounter");
            $table->string("type");
            $table->string("folder", 5)
                ->unique();
            $table->boolean("isFinished")
                ->default(false);
            $table->text('signature')
                ->nullable()
                ->default(null);
            $table->boolean('signedByClient')
                ->nullable()
                ->default(false);
            $table->foreignId('vehicle_id')
                ->constrained('vehicles')
                ->onDelete('no action');
            $table->foreignId('expert_id')
                ->constrained('experts')
                ->onDelete('no action');
            $table->foreignId('garage_id')
                ->nullable()
                ->constrained('garages')
                ->onDelete('no action');
            $table->foreignId('client_id')
                ->nullable()
                ->constrained('clients')
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
