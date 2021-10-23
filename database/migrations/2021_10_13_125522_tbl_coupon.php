<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCoupon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_coupon', function (Blueprint $table) {
            $table->Increments('coupon_id')->unsigned();
            $table->string('coupon_name');
            $table->Integer('coupon_time');
            $table->Integer('coupon_condition');
            $table->Integer('coupon_number');
            $table->string('coupon_code');
            $table->string('start_day');
            $table->string('end_day');
            $table->string('coupon_used');
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
        Schema::dropIfExists('tbl_coupon');
    }
}
