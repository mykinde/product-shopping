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
     
            Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name', 100);
        $table->decimal('price', 10, 2);
        $table->string('image')->nullable();
        $table->text('description')->nullable();
        $table->unsignedBigInteger('category_id')->nullable();
        $table->integer('quantity')->default(1);
        $table->unsignedBigInteger('user_id');
        $table->timestamps();

        $table->foreign('category_id')->references('id')->on('categories')->nullOnDelete();
        $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
    });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
