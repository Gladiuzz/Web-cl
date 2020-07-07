<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_news', function (Blueprint $table) {
            $table->integer('id_news', 21);
            $table->unsignedInteger('id_user');
            $table->dateTime('tgl_news');
            $table->string('subject', 100);
            $table->string('meta_title', 255);
            $table->text('meta_keyword');
            $table->text('meta_desc');
            $table->text('artikel');
            $table->text('article_short');
            $table->string('gambar');
            $table->string('caption');
            $table->string('permalink');
            $table->string('bahasa', 5)->nullable();
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
        Schema::dropIfExists('cl_news');
    }
}
