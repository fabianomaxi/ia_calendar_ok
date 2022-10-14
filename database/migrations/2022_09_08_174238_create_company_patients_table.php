<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_patients', function (Blueprint $table) {
            $table->integer('id_company_patient')->primary();
            $table->integer('id_patients');
            $table->integer('id_company');
            $table->foreign('id_patients')->references('id_patients')->on('patients');
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
        Schema::dropIfExists('company_patients');
    }
}
