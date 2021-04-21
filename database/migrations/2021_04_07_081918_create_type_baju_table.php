<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeBajuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_baju', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id')->constrained('category')->onDelete('cascade');
            $table->foreignId('sub_cat_id')->constrained('sub_category')->onDelete('cascade');
            $table->string('type_nama');
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
        Schema::dropIfExists('type_baju');
    }
}
