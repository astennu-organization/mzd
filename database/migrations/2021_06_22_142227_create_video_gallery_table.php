<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_gallery', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('video');
            $table->bigInteger('moderator_id')->unsigned();
            $table->timestamps();


            $table->foreign('moderator_id')->references('id')->on('moderators')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video_gallery');
    }
}
