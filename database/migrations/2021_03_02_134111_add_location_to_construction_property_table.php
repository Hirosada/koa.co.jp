<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocationToConstructionPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('construction_property', function (Blueprint $table) {
            $table->string('location', 255)->nullable()->after('property_name')->comment('場所');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('construction_property', function (Blueprint $table) {
            $table->dropColumn('location');
        });
    }
}
