<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->unsignedBiginteger('user_id')->index();
             $table->string('course_name');
             $table->string('postutme_score')->nullable();
             $table->integer('amount')->nullable();
             $table->text('ssce_requirements')->nullable();
             $table->timestamps();
             $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
