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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('model', 6);
            $table->tinyInteger('age');
            $table->tinyInteger('gender')->comment('0: Mujer, 1: Hombre, 2: Otro');
            $table->string('graduation', 100)->comment('Junio 2023, Diciembre 2023');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
