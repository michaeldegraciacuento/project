<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result', function (Blueprint $table) {
            $table->bigIncrements('result_id');
            $table->string('result_candidate');
            $table->string('result_qualification');
            $table->string('result_dateass');
            $table->string('result_result');

            $table->unsignedBigInteger('assessment_id');

            $table->timestamps();

            // FOREIGN KEY OF ASSESSMENT
            $table->foreign('assessment_id')
                  ->references('assessment_id')
                  ->on('assessment')
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
        Schema::dropIfExists('result');
    }
}
