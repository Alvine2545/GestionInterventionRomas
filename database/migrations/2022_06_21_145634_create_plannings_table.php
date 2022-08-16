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
        Schema::create('plannings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('priorite');
            $table->string('start');
            $table->string('title');
            $table->string('end');
            $table->string('photo');
            $table->date('date');
            $table->foreignId('typeinterventions_id')->constrained('type_interventions');
            $table->foreignId('responsables_id')->constrained('users');
            $table->foreignId('pannes_id')->constrained('pannes');
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
        Schema::dropIfExists('plannings');
    }
};
