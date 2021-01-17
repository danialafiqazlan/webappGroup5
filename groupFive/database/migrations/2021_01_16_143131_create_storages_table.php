<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storages', function (Blueprint $table) {
          //  $table->id();
          //  $table->timestamps();

            $table->id()->startingValue(4000);
            $table->string('storage_name');
            $table->string('storage_brand');
            $table->string('storage_inv_level');
            $table->string('storage_remarks');
            $table->decimal('storage_price', 7, 2);
            $table->integer('staff_id')->unsigned()->nullable();
            $table->foreign('staff_id')->references('id')->on('staff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storages');
    }
}
