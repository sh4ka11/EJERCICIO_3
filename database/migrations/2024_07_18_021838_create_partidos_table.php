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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->string('ciudad');
            $table->integer('codigo');
            $table->string('estadio');
            $table->integer('aforo');
            $table->date('año');

            $table->unsignedBigInteger('gol_id')->nullable();
            $table->foreign('gol_id')
            ->references('id')
            ->on('gols')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
