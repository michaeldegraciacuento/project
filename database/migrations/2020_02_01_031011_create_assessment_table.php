<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment', function (Blueprint $table) {
            $table->bigIncrements('assessment_id');
            $table->string('trainee_name');
            $table->string('trainee_middlename');
            $table->string('trainee_lastname');
            $table->string('assessment_sched_taken');
            $table->string('assessment_pof');
            $table->string('assessment_cn');
            $table->unsignedBigInteger('assessor_id');
            $table->unsignedBigInteger('qualification_id');
   
           

            $table->timestamps();

            // FOREIGN KEY OF ASSESSOR
            $table->foreign('assessor_id')
                  ->references('assessor_id')
                  ->on('assessor')
                  ->onDelete('cascade');

             // FOREIGN KEY OF QUALIFICATION
            $table->foreign('qualification_id')
                  ->references('qualification_id')
                  ->on('qualification')
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
        Schema::dropIfExists('assessment');
    }
}
