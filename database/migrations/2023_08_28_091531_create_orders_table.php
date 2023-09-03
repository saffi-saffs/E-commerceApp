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
            $table->string('name')->nullble();
            $table->string('email')->nullble();
            $table->string('phone')->nullble();
            $table->string('address')->nullble();
            $table->string('product_title')->nullble();
            $table->string('quantity')->nullble();
            $table->string('price')->nullble();
            $table->string('image')->nullble();
            $table->string('product_id')->nullble();
            $table->string('user_id')->nullble();
            $table->string('payment_status')->nullble();

            $table->string('delivery_status')->nullble();

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
