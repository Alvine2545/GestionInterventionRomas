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
        Schema::create('pannes_plannings', function (Blueprint $table) {
            $table->id();
            $table->boolean('estTraiter');
            $table->foreignId('panne_id')->constrained('pannes')->nullable();
            $table->foreignId('planning_id')->constrained('plannings');
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
        Schema::dropIfExists('pannes_plannings');
    }
};
