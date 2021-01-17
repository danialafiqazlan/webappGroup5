<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeripheralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peripherals', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();

             $table->id()->startingValue(5000);
            $table->string('peripheral_name');
            $table->string('peripheral_brand');
            $table->string('peripheral_inv_level');
            $table->string('peripheral_remarks');
            $table->decimal('peripheral_price', 7, 2);
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
        Schema::dropIfExists('peripherals');
    }
}
