<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->bigIncrements('schedule_id');
            $table->string('schedule_date');
            $table->string('schedule_no_of_candidates');
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
        Schema::dropIfExists('schedule');
    }
}
