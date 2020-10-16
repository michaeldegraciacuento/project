<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkupdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkupdate', function (Blueprint $table) {
            $table->bigIncrements('linkupdate_id');
            $table->string('linkupdate_headrep');
            $table->string('linkupdate_date')->nullable();
            $table->string('linkupdate_year')->nullable();
            $table->string('linkupdate_url');
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
        Schema::dropIfExists('linkupdate');
    }
}
