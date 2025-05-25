<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demographics', function (Blueprint $table) {
            $table->string('mobile', 16)->after('head_name')->nullable();
        });
        Schema::table('socios', function (Blueprint $table) {
            $table->string('forest_harvest_week', 20)->nullable();
            $table->string('forest_harvest_ton', 20)->nullable();
            $table->string('gross_revenue', 20)->nullable();
            $table->string('pci', 20)->nullable();
            $table->string('gov_investment', 20)->nullable();
        });
        Schema::table('crimes', function (Blueprint $table) {
            $table->text('admin_control')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demographics', function (Blueprint $table) {
            $table->dropColumn('mobile');
        });
        Schema::table('socios', function (Blueprint $table) {
            $table->dropColumn('forest_harvest_week');
            $table->dropColumn('forest_harvest_ton');
            $table->dropColumn('gross_revenue');
            $table->dropColumn('pci');
            $table->dropColumn('gov_investment');
        });
        Schema::table('crimes', function (Blueprint $table) {
            $table->dropColumn('admin_control');
        });
    }
}
