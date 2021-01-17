<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpus', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();

           $table->id()->startingValue(1000);
           $table->string('cpu_name');
           $table->string('cpu_brand');
           $table->string('cpu_inv_level');
           $table->string('cpu_remarks');
           $table->decimal('cpu_price', 7, 2);
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
        Schema::dropIfExists('cpus');
    }
}
