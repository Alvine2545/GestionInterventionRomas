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
        Schema::create('produitinstalles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('version');
            $table->foreignId('produits_id')->constrained('produits');
            $table->foreignId('installations_id')->constrained('installations');
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
        Schema::dropIfExists('produitinstalles');
    }
};
