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
        Schema::create('arrive', function (Blueprint $table) {
            $table->id('NumeroArrive');
            $table->date('DateArrive');
            $table->string('Provenance');
            $table->integer('numero_Correspondance_arrive');
            $table->date('DateCorrespondanceArrive');
            $table->string('TexteCorespondanceArrive');
            $table->integer('piece_jointe_arrive');
            $table->string('observations');
            $table->string('etat')->default('En attente');
            $table->string('Destinataire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arrive');
    }
};
