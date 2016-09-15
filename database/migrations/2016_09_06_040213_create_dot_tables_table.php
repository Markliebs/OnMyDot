<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDotTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dottables', function (Blueprint $table) {
            $table->string('pn');
            $table->string('ss');
            $table->string('sl');
            $table->string('si');
            $table->string('dfl');
            $table->string('hm');
            $table->string('fb');
            $table->string('sfh');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dottables');
    }
}
