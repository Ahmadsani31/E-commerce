<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUkuranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukuran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id')->constrained('category')->onDelete('cascade');
            $table->foreignId('sub_cat_id')->constrained('sub_category')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('type_baju')->onDelete('cascade');
            $table->string('size');
            $table->string('panjang');
            $table->string('lebar');
            $table->string('usia')->nullable();
            $table->string('lingkar-dada')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('ukuran');
    }
}
