<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('fname');
            $table->string('mname');
            $table->string('preaddress');
            $table->string('peraddress');
            $table->string('office')->nullable();
            $table->string('nid');
            $table->string('occupation');
            $table->string('dob');
            $table->string('nation');
            $table->string('blood');
            $table->string('gender');
            $table->string('email');
            $table->string('phone');
            $table->string('gphone');
            $table->string('relationship');
            $table->string('school1');
            $table->string('school2')->nullable();
            $table->string('school3')->nullable();
            $table->string('school4')->nullable();
            $table->string('board1');
            $table->string('board2')->nullable();
            $table->string('board3')->nullable();
            $table->string('board4')->nullable();
            $table->string('year1');
            $table->string('year2')->nullable();
            $table->string('year3')->nullable();
            $table->string('year4')->nullable();
            $table->string('cgpa1');
            $table->string('cgpa2')->nullable();
            $table->string('cgpa3')->nullable();
            $table->string('cgpa4')->nullable();
            $table->string('rname')->nullable();
            $table->string('rnumber')->nullable();
            $table->string('batch')->nullable();
            $table->string('rid')->nullable();
            $table->string('rrelationship')->nullable();

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
