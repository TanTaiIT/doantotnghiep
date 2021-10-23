<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->Increments('product_id');
            $table->string('product_name');
            $table->integer('category_id')->unsigned();
            $table->text('product_desc');
            $table->float('product_price');
            $table->text('product_image');
            $table->integer('product_status');
            $table->timestamps();
            $table->foreign('category_id')->references('category_id')->on('tbl_category_product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_product');
    }
}
