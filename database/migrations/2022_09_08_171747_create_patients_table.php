<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->integer('id_patients')->primary() ;
            $table->string('name', 225);
            $table->string('email', 225);
            $table->date('birthdate');
            $table->char('gender', 1);
            $table->string('phone_number', 225);
            $table->string('cell_phone', 225);
            $table->string('cep', 225);
            $table->string('street', 225);
            $table->string('district', 225);
            $table->string('state', 225);
            $table->string('city', 225);
            $table->string('country', 225);
            $table->char('status', 1);
            $table->timestamp('dt_registration');
            $table->integer('user_registration');
            $table->timestamps();
        });
    }

    //$table->foreign('id_patients')->references('id_patients')->on('patients');


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
