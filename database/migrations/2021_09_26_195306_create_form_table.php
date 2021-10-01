<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('subname')->nullable();
            $table->string('confemail')->nullable();
            $table->string('tel')->nullable();
            $table->string('company')->nullable();
            $table->string('departmant')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('address')->nullable();
            $table->string('aderess2')->nullable();
            $table->string('subadress')->nullable();
            $table->string('inquiry')->nullable();
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
        Schema::dropIfExists('form');
    }
}



