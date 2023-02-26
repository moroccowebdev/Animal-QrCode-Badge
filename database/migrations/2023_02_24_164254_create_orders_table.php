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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('userId')->nullable();
            $table->string('userName')->nullable();
            $table->string('userEmail')->nullable();
            $table->string('userPhone')->nullable();
            $table->string('productTitle')->nullable();
            $table->string('productId')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('deliveryStatus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
