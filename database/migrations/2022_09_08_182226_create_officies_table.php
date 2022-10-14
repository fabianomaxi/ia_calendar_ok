<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officies', function (Blueprint $table) {
            $table->integer('id_office')->primary();
            $table->string('name', 225);
            $table->text('description');
            $table->char('status', 1);
            $table->integer('id_company');
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
        Schema::dropIfExists('officies');
    }
}
