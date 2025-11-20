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
        Schema::create('depart', function (Blueprint $table) {
            $table->id('NumeroDepart');
            $table->integer('numero_correspondance_depart');
            $table->date('DateDepart');
            $table->string('ObjetDepart');
            $table->string('DestinataireDepart');
            $table->integer('nombre_pieces_jointes');
            $table->string('etat_depart')->default('Non Validé');
            $table->string('ObservationsDepart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depart');
    }
};
