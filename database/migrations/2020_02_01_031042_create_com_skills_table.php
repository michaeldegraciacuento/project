<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_skills', function (Blueprint $table) {
            $table->bigIncrements('com_skills_id');
            $table->string('com_skills_title');
            $table->string('com_skills_no_hours');
            $table->string('com_skills_no_can');
            $table->string('com_skills_date_of_reg')->nullable();
            $table->string('com_skills_cptr')->nullable();
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
        Schema::dropIfExists('com_skills');
    }
}
