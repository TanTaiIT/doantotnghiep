<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_post', function (Blueprint $table) {
            $table->Increments('post_id')->unsigned();
            $table->text('post_title');
            $table->Integer('post_views');
            $table->strig('post_slug');
            $table->text('post_content');
            $table->text('post_desc');
            $table->text('post_meta_desc');
            $table->string('post_meta_keywords');
            $table->string('post_image');
            $table->Integer('cate_post_id')->unsigned();
            $table->Integer('post_status');
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
        Schema::dropIfExists('tbl_post');
    }
}
