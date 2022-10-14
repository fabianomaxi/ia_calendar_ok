<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->integer('id_professional')->primary();
            $table->string('name', 225);
            $table->string('email', 225);
            $table->char('status', 1);
            $table->string('phone_number', 225);
            $table->integer('id_company');
            $table->integer('id_office');
            $table->integer('id_specialty');
            $table->foreign('id_specialty')->references('id_specialty')->on('specialties');
            $table->foreign('id_office')->references('id_office')->on('officies');
            $table->foreign('id_company')->references('id_company')->on('companies');
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
        Schema::dropIfExists('professionals');
    }
}
