<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->default(1)->comment("1: hình ảnh, 2: video");
            $table->string('path')->nullable();
            $table->string('image')->nullable();
            $table->foreignId("room_id")->constraint("rooms")->onDelete("cascade");
            // $table->bigInteger('room_id')->default(0);
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
        Schema::dropIfExists('images');
    }
}
