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
        Schema::create('denunciations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');

            $table->string('title');
            $table->string('type');
            $table->string('place');
            $table->string('date');
            $table->text('description');
            $table->string('secret_code');
            $table->string('file_name');
            $table->string('status')->default('sent');
            $table->string('level')->nullable();
            $table->string('notif_status')->default('none');

            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('place_personal')->nullable();
            $table->string('accord')->default('non');
            $table->string('person_type');
            $table->string('sexe');
            $table->string('observations')->default('AUCUNE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denunciations');
    }
};
