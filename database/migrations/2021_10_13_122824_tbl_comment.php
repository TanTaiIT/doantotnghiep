<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_comment', function (Blueprint $table) {
            $table->Increments('commnet_id')->unsigned();
            $table->text('comment');
            $table->timestamps('comment_date');
            $table->Integer('comment_product_id')->unsigned();
            $table->Integer('comment_parent_comment')->unsigned();
            $table->Integer('comment_status');
            $table->string('comment_name');
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
        Schema::dropIfExists('tbl_comment');
    }
}
