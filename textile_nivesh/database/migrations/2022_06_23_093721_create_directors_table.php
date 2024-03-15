<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {
            $table->id();
            $table->integer('applicant_id');
            $table->string('director_name');
            $table->string('director_mobile');
            $table->string('director_email');
            $table->string('director_din');
            $table->string('director_din_doc');
            $table->string('director_pan');
            $table->string('director_pan_doc');
            $table->string('director_status');
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
        Schema::dropIfExists('directors');
    }
}
