<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComQualiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_quali', function (Blueprint $table) {
            $table->bigIncrements('com_quali_id');
            $table->string('com_quali_com_qualititle');
            $table->string('com_quali_no_hours');
            $table->string('com_quali_date_of_reg')->nullable();
            $table->integer('com_quali_assessment_no_of_candidate')->nullable();
            $table->string('com_quali_cptr')->nullable();
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
        Schema::dropIfExists('com_quali');
    }
}
