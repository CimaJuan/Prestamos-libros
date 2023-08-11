<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    
    public function up(): void
    {
        Schema::create('bibliotecarios', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nombre');
            $table->string('telefono');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('bibliotecarios');
    }
};
