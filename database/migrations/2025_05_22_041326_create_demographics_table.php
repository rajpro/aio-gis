<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demographics', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('surveyor_id');
            $table->string('head_name', 120);
            $table->enum('gender', ['Male', 'Female']);
            $table->tinyInteger('age')->unsigned(); // small age values
            $table->unsignedInteger('total_member');
            $table->json('member_details');
            $table->string('literacy', 60);
            $table->string('primary_occupation', 150);
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
        Schema::dropIfExists('demographics');
    }
}
