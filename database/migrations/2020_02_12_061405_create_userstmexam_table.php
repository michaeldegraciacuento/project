<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserstmexamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userstmexam', function (Blueprint $table) {
            $table->bigIncrements('ue_id');
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('exams_id');
            $table->integer('ue_score');
            $table->string('ue_answersheet');
            $table->timestamps();

            //FOREIGN KEY OF userstm
            $table->foreign('id')
                ->references('id')
                ->on('userstm')
                ->onDelete('cascade');  

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
        Schema::dropIfExists('userstmexam');
    }
}
