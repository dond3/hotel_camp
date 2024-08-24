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
        Schema::create('m_products_history', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_genre_id');
            $table->string('product_name');
            $table->decimal('base_price', 9, 2);
            $table->decimal('tax_include_price', 9, 2);
            $table->string('product_category');
            $table->decimal('point_rate', 5, 2);
            $table->integer('limit_per_person')->nullable();
            $table->integer('estimated_shipping_days')->nullable();
            $table->text('size_info')->nullable();
            $table->text('specifications')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->string('copyright_notice')->nullable();
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
        Schema::dropIfExists('m_products_history');
    }
};
