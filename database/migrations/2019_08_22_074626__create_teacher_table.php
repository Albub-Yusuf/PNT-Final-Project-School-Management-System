<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('name');
            $table->string('ms_major')->nullable();
            $table->string('ms_academy')->nullable();
            $table->float('ms_result')->nullable();
            $table->string('bs_major');
            $table->string('bs_academy');
            $table->float('bs_result');
            $table->string('conducting_subject');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('join_date');
            $table->text('teacher_image')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('teachers');
    }
}
