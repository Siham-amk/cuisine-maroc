<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuisiniers', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Ville');
            $table->string('Disponibilité');
            $table->string('prix')->nullable();
            $table->string('Lieu_de_travail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuisiniers');
    }
};
