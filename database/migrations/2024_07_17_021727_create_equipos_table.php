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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();

            $table->integer('codigo');
            $table->string('estadio');
            $table->string('aforo');
            $table->date('año');
         

            $table->unsignedBigInteger('jugador_id')->nullable();

            $table->foreign('jugador_id')
            ->references('id')
            ->on('jugadors')->onDelete('cascade');

            $table->unsignedBigInteger('presidente_id')->nullable();

            $table->foreign('presidente_id')
            ->references('id')
            ->on('presidentes')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
