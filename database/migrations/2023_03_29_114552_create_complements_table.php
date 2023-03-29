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
        Schema::create('complements', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('denunciation_id');
            $table->foreign('denunciation_id')->references('id')->on('denunciations')->onDelete('restrict');
            $table->string('type');
            $table->string('title')->nullable();
            $table->string('file_name')->nullable();
            $table->string('content')->nullable();
            $table->string('status')->default('sent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complements');
    }
};
