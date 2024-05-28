<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeFieldsToGeneralsettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('generalsettings', function (Blueprint $table) {
            $table->tinyInteger('is_physical')->default(1)->nullable();
            $table->tinyInteger('is_digital')->default(1)->nullable();
            $table->tinyInteger('is_license')->default(1)->nullable();
            $table->tinyInteger('is_affiliate')->default(1)->nullable();
            $table->tinyInteger('is_bulk')->default(1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('generalsettings', function (Blueprint $table) {
            //
        });
    }
}
