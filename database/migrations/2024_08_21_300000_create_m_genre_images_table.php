<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_genre_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('genre_id');
            $table->text('image_url');
            $table->timestamps();

            $table->foreign('genre_id')->references('id')->on('m_genre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_genre_images');
    }
};