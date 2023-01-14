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
            $table->boolean("customerResponsible");
            $table->foreignId('unavailabilities_reasons_id')
                ->constrained('unavailabilities_reasons')
                ->onDelete('no action');
            $table->foreignId('missions_experts_id')
                ->constrained('missions_experts')
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
