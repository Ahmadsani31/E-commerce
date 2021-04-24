<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->foreignId('costumer_id')->references('id')->on('costumers');
            $table->foreignId('product_id')->references('id')->on('product');
            $table->foreignId('productDetail_id')->references('id')->on('product_detail');
            $table->foreignId('ukuran_id')->references('id')->on('ukuran');
            $table->bigInteger('qty');
            $table->bigInteger('stock');
            $table->string('harga');
            $table->string('voucher')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
