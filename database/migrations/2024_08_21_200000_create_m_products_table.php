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
        Schema::create('m_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('genre_id');
            $table->text('product_name');
            $table->decimal('base_price', 9, 2);
            $table->decimal('tax_include_price', 9, 2);
            $table->text('product_category');
            $table->decimal('point_rate', 5, 2);
            $table->integer('limit_per_person')->nullable();
            $table->integer('estimated_shipping_days')->nullable();
            $table->text('size_info')->nullable();
            $table->text('specifications')->nullable();
            $table->text('country_of_origin')->nullable();
            $table->text('copyright_notice')->nullable();
            $table->timestamps();

            table->foreign('genre_id')->references('id')->on('m_genre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_products');
    }
};
