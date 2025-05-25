<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('surveyor_id');
            $table->string('forest_production', 150)->nullable();
            $table->string('qty', 10)->nullable();
            $table->string('income_per_wk', 10)->nullable();
            $table->string('income_per_mo', 10)->nullable();
            $table->string('seasonal_variation', 10)->nullable();
            $table->string('peak_mo', 10)->nullable();
            $table->string('land_holding', 20)->nullable();
            $table->string('land_use', 20)->nullable();
            $table->string('support_received', 150)->nullable();
            $table->string('debt', 20)->nullable();
            $table->string('debt_src', 20)->nullable();
            $table->string('loan', 20)->nullable();
            $table->string('loan_reason', 20)->nullable();
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
        Schema::dropIfExists('socios');
    }
}
