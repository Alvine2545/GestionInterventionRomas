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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('tel')->nullable();
            $table->string('siege')->nullable();
            $table->string('raisonSocial')->nullable();
            $table->string('poste')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('ifu')->nullable();
            $table->boolean('disponibilite')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('demande')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
