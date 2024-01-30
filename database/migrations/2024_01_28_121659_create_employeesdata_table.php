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
        Schema::create('employeesdata', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('depertment')->nullable();
            $table->string('position')->nullable();
            $table->string('salary')->nullable();
            $table->string('hire_data')->nullable();
            $table->enum('status', ['active', 'inactive'])->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employeesdata');
    }
};
