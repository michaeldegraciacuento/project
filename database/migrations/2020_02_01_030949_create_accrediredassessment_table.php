<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccrediredassessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accrediredassessment', function (Blueprint $table) {
            $table->bigIncrements('accrediredassessment_id');
            $table->unsignedBigInteger('qualification_id');
            $table->string('accrediredassessment_acc_no');
            $table->string('accrediredassessment_date_of_acc');
            $table->string('accrediredassessment_date_of_exp');
            $table->timestamps();


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
        Schema::dropIfExists('accrediredassessment');
    }
}
