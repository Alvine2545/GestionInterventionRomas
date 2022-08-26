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
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('details');
            $table->string('lieu');
            $table->string('code');
            $table->dateTime('date');
            $table->text('solution');
            $table->string('reference');
            $table->string('appreciation');
            $table->boolean('payer')->default(false);
            $table->foreignId('plannings_id')->constrained('plannings');
            $table->foreignId('plannings_users_id')->constrained('plannings_users');
            $table->foreignId('type_id')->constrained('type_interventions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interventions');
    }
};
