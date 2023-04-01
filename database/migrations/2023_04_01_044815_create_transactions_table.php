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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pembeli')->unsigned()->nullable();
            $table->foreign('id_pembeli')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('id_product')->unsigned()->nullable();
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->integer('qty');
            $table->integer('harga_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
