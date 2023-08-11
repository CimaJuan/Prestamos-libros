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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('ISBN');
            $table->string('titulo');
            $table->string('autor');
            $table->unsignedBigInteger('editorial_id');
            $table->unsignedBigInteger('categoria_id');
            $table->string('ejemplares');
            $table->unsignedBigInteger('estado_id');
            $table->string('foto');
            $table->timestamps();

            
            $table->foreign('editorial_id')->references('id')->on('editorial');

            $table->foreign('categoria_id')->references('id')->on('categoria');

            $table->foreign('estado_id')->references('id')->on('estado');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
