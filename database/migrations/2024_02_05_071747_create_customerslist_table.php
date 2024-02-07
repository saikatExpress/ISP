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
        Schema::create('customerslist', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('zone')->nullable();
            $table->string('package')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('mobile')->nullable();
            $table->string('expire_Date')->nullable();
            $table->string('pay_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customerslist');
    }
};
