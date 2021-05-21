<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestroCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restro_cart_details', function (Blueprint $table) {
            $table->id();
            $table->integer('restro_cart_id');
            $table->integer('restro_order_type_id');
            $table->integer('users_delivery_details_id');
            $table->string('suggestion');
            $table->string('delivery_type');
            $table->string('delivery_time');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restro_cart_details');
    }
}
