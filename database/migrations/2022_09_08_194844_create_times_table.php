<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->integer('id_time')->primary();
            $table->string('day', 225);
            $table->string('start_time', 225);
            $table->string('end_time', 225);
            $table->integer('interval');
            $table->char('status', 1);
            $table->integer('id_company');
            $table->integer('id_professional');
            $table->foreign('id_company')->references('id_company')->on('companies');
            $table->foreign('id_professional')->references('id_professional')->on('professionals');
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
        Schema::dropIfExists('times');
    }
}
