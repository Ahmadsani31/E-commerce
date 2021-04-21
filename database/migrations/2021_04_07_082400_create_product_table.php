<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('cat_id')->constrained('category')->onDelete('cascade');
            $table->foreignId('sub_cat_id')->constrained('sub_category')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('type_baju')->onDelete('cascade');
            $table->string('product_nama');
            $table->string('bahan');
            $table->text('description');
            $table->text('kode_product');
            $table->string('status_product');
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
        Schema::dropIfExists('product');
    }
}
