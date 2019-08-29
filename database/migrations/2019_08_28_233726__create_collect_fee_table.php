<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectFeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('sessions');
            $table->Integer('class');
            $table->Integer('roll');
            $table->string('name');
            $table->string('date');
            $table->Integer('day');
            $table->Integer('month');
            $table->Integer('year');
            $table->Integer('amount');
            $table->string('collected_by');
            $table->enum('status',['due','paid']);
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
        Schema::dropIfExists('fees');
    }
}
