<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblShipping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_shipping', function (Blueprint $table) {
            $table->Increments('shipping_id')->unsigned();
            $table->string('shipping_name');
            $table->Integer('shipping_method');
            $table->string('shipping_address');
            $table->string('shipping_address2');
            $table->string('shipping_phone');
            $table->string('shipping_email');
            $table->text('shipping_note');
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
        Schema::dropIfExists('tbl_shipping');
    }
}
