<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogupdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logupdates', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('updated_by');
            $table->string('column_name');
            $table->string('column_value');
            $table->string('column_old_value');
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
        Schema::dropIfExists('logupdates');
    }
}
