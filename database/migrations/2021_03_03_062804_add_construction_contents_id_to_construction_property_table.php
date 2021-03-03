<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstructionContentsIdToConstructionPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('construction_property', function (Blueprint $table) {
            $table->bigInteger('construction_contents_id')->nullable()->after('property_name')->comment('施工例コンテンツID');
            $table->foreign('construction_contents_id')->references('construction_contents_id')->on('construction_contents');
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
            $table->dropColumn('construction_contents_id');
        });
    }
}
