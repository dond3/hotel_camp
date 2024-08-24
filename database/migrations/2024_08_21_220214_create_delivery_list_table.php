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
        Schema::create('delivery_list', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('last_name_furigana');
            $table->string('first_name_furigana');
            $table->string('postal_code');
            $table->string('prefecture');
            $table->string('address_line_1')->commnet("市区町村");
            $table->string('address_line_2')->nullable()->commnet("番地");
            $table->string('address_line_3')->nullable()->commnet("建物名");
            $table->string('phone_number');
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
        Schema::dropIfExists('delivery_list');
    }
};
