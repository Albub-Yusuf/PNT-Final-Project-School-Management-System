<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->text('permanent_address');
            $table->text('present_address');
            $table->Integer('day');
            $table->Integer('month');
            $table->Integer('year');
            $table->Integer('session');
            $table->string('birth_certificate_number');
            $table->enum('gender',['male','female']);
            $table->Integer('class');
            $table->string('department');
            $table->text('student_image')->nullable();
            $table->text('student_signature')->nullable();
            $table->text('guardian_image')->nullable();
            $table->string('father_occupation')->nullable;
            $table->enum('status',['pending','selected','rejected','waiting']);
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
        Schema::dropIfExists('students');
    }
}
