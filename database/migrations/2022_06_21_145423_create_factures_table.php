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
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('prix');
            $table->text('code');
            $table->boolean('payer');
            $table->enum('type', ["Proformat", "Facture_vente", "Facture_annulation"]);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('interventions_id')->constrained('interventions');

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
        Schema::dropIfExists('factures');
    }
};
