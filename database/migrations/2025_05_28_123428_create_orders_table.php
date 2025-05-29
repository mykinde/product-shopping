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
        $table->unsignedBigInteger('user_id');
        $table->string('name', 100);
        $table->string('phone', 20);
        $table->text('address');
        $table->string('city', 100);
        $table->decimal('total', 10, 2);
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
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
