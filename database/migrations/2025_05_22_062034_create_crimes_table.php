<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crimes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('surveyor_id');
            $table->boolean('crime');
            $table->string('toc', 20)->comment('Type of crime')->nullable();
            $table->string('police', 20)->nullable();
            $table->string('action_take', 20)->nullable();
            $table->string('jail', 20)->nullable();
            $table->string('jail_relative', 20)->nullable();
            $table->string('case', 20)->nullable();
            $table->string('duration', 20)->nullable();
            $table->string('feel_safe', 20)->nullable();
            $table->string('police_visits', 20)->nullable();
            $table->string('vulnerability_flags', 100)->nullable();
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
        Schema::dropIfExists('crimes');
    }
}
