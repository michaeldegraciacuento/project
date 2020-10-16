<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnipepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnipeps', function (Blueprint $table) {
            $table->bigIncrements('alumnipeps_id');
            $table->string('alumnipeps_firstname');
            $table->string('alumnipeps_lastname');
            $table->string('alumnipeps_middlename');
            $table->string('alumnipeps_dategrad');
            $table->string('alumnipeps_batch');
            $table->string('alumnipeps_image');
            $table->unsignedBigInteger('qualification_id');
            $table->timestamps();


            //FOREIGN KEY OF QUALIFICATION
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
        Schema::dropIfExists('alumnipeps');
    }
}
