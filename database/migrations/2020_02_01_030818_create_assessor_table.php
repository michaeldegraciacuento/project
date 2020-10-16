<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessor', function (Blueprint $table) {
            $table->bigIncrements('assessor_id');
            $table->string('assessor_name');
            $table->string('assessor_middlename');
            $table->string('assessor_lastname');
            $table->string('assessor_gender');
            $table->string('assessor_qualification');
            $table->integer('assessor_age');
            $table->date('assessor_expiration_accredited');
            $table->date('assessor_date_accquired');
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
        Schema::dropIfExists('assessor');
    }
}
