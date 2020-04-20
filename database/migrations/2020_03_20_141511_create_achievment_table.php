<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id');
            $table->string('name');
            $table->string('image');
            $table->integer('Achievment');
            $table->string('class');
            $table->integer('year');

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
        Schema::dropIfExists('achievment');
    }
}
