<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('quest_id');
            $table->unsignedBigInteger('exams_id');
            $table->string('quest_qtext');
            $table->integer('quest_point');
            $table->integer('quest_no');
            $table->timestamps();

            //FOREIGN KEY OF exams
            $table->foreign('exams_id')
                ->references('exams_id')
                ->on('exams')
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
        Schema::dropIfExists('questions');
    }
}
