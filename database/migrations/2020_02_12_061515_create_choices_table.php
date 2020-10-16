<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->bigIncrements('choices_id');
            $table->unsignedBigInteger('quest_id');
            $table->string('choices_ctext');
            $table->string('choices_correct');
            $table->string('choices_alpha');
            $table->timestamps();



            //FOREIGN KEY OF questions
            $table->foreign('quest_id')
                ->references('quest_id')
                ->on('questions')
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
        Schema::dropIfExists('choices');
    }
}
