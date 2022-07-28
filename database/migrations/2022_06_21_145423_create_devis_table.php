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
        Schema::create('devis', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('prix');
            $table->text('code');
            $table->boolean('payer');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('type_devis_id')->constrained('type_devis');
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
        Schema::dropIfExists('devis');
    }
};
