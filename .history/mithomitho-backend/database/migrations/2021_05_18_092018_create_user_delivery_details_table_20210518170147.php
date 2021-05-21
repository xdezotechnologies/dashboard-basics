<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDeliveryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_delivery_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_int');
            $table->text('city');
            $table->softDeletes('delivery_area');
            $table->softDeletes('deleted_at');
            $table->softDeletes('deleted_at');
            $table->softDeletes('deleted_at');
            $table->softDeletes('deleted_at');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_delivery_details');
    }
}
