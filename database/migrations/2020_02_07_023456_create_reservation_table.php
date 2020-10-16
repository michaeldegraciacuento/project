<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->bigIncrements('res_id');
            $table->string('res_fname');
            $table->string('res_mname');
            $table->string('res_lname');
            $table->string('res_barangay');
            $table->string('res_city');
            $table->string('res_province');
            $table->string('res_region');
            $table->string('res_district');
            $table->string('res_email');
            $table->string('res_contact');
            $table->string('res_nationality');
            $table->string('res_gender');
            $table->string('res_civilstat');
            $table->string('res_employstat');
            $table->string('res_educational');
            $table->string('res_birthdate');
            $table->string('res_age');
            $table->string('res_birthcity');
            $table->string('res_birthprov');
            $table->string('res_birthreg');
            $table->string('registeredDate');
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
        Schema::dropIfExists('reservation');
    }
}
