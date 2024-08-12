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
        Schema::create('prelevements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->integer('rythme_cardiaque');
            $table->decimal('temperature', 5, 2);
            $table->integer('frequence_respiratoire');
            $table->decimal('temperature_ambiante', 5, 2);
            $table->string('pression_arterielle');
            $table->decimal('saturation_oxygene', 5, 2);
            $table->string('statut')->default('non vérifié');
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prelevements');
    }
};
