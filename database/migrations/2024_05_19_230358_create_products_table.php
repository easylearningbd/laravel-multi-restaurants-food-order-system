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
            $table->string('name');
            $table->string('slug')->nullable();
            $table->integer('category_id');
            $table->integer('city_id');
            $table->integer('menu_id');
            $table->string('code')->nullable();
            $table->string('qty')->nullable();
            $table->string('size')->nullable();
            $table->string('price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('image')->nullable();
            $table->string('client_id')->nullable();
            $table->string('most_populer')->nullable();
            $table->string('best_seller')->nullable();
            $table->string('status')->nullable(); 
            $table->timestamps();
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
