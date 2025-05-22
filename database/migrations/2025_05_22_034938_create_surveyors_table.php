<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveyors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('village', 120);
            $table->string('block', 120);
            $table->point('location');
            $table->string('hh_id', 120);
            $table->dateTime('survey_date');
            $table->string('surveyor_name', 120);
            $table->tinyText('team');
            $table->dateTime('lvu')->comment("Last Version Update");
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
        Schema::dropIfExists('surveyors');
    }
}
