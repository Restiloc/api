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
        Schema::create('unavailabilities', function (Blueprint $table) {
            $table->id();
            $table->boolean("customerResponsible")->default(false);
            $table->foreignId('reason_id')
                ->constrained('reasons')
                ->onDelete('no action');
            $table->foreignId('mission_id')
                ->constrained('missions')
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
        Schema::dropIfExists('unavailabilities');
    }
};
