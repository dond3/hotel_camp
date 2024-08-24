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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->enum('payment_status', ['pending', 'authorized', 'captured', 'failed', 'refunded', 'voided']);
            $table->enum('payment_method', ['credit_card', 'convenience_store_payment']);
            $table->decimal('base_sub_total', 9, 2);
            $table->decimal('tax_include_sub_total', 9, 2);
            $table->timestamp('order_date');
            $table->string('order_number')->unique();
            $table->string('tracking_number')->nullable();
            $table->enum('shipping_status', ['unshipped', 'processing', 'shipped', 'out_for_delivery', 'returned']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
