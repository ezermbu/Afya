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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('profile_photo')->default('patient.png');
            $table->text('medical_history')->nullable();
            $table->string('blood_type')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->text('address')->nullable();
            $table->text('family_history')->nullable();
            $table->boolean('wheelchair_user')->default(false);
            $table->text('allergies')->nullable();
            $table->text('current_medications')->nullable();
            $table->text('chronic_diseases')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
