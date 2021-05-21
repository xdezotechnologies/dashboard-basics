<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restros', function (Blueprint $table) {
            $table->id();
            $table->integer('restro_category_id');
            $table->integer('admin_user_id');
            $table->text('phone');
            $table->integer('status');
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
        Schema::dropIfExists('restros');
    }
}
