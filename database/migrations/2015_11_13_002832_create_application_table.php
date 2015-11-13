<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id')->unique();
            $table->longText('question_1');
            $table->longText('question_2');
            $table->longText('question_3');
            $table->longText('question_4');
            $table->longText('question_5');
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
        Schema::drop('applications');
    }
}
