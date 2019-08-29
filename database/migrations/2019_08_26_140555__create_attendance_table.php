<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->Integer('day');
            $table->Integer('month');
            $table->Integer('year');
            $table->Integer('session');
            $table->Integer('class');
            $table->Integer('roll');
            $table->Integer('sid');
            $table->string('sname');
            $table->enum('status',['absent','present']);
            $table->string('tname');
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
        Schema::dropIfExists('attendances');
    }
}
