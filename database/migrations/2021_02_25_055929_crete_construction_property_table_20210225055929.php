<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteConstructionPropertyTable20210225055929 extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('construction_property', function (Blueprint $table) {
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8_general_ci';

            $table->bigInteger('construction_property_id')->primary()->comment('施工物件iD');
            $table->bigInteger('construction_id')->nullable()->comment('施工ID');
            $table->string('property_name', 255)->nullable()->comment('物件名');
            $table->timestamp('form1_updated_at')->default(DB::raw('NOW()'))->comment('フォーム1更新日時');
            $table->timestamp('created_at')->default(DB::raw('NOW()'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('NOW()'))->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');

        });
        DB::statement("ALTER TABLE construction_property COMMENT '施工例物件'");

        Schema::create('construction_property_seq', function (Blueprint $table) {
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8_general_ci';

            $table->bigInteger('construction_property_id')->autoIncrement()->comment('施工物件iD');
            $table->timestamp('created_at')->default(DB::raw('NOW()'))->comment('登録日時');
        });
        DB::statement("ALTER TABLE construction_property_seq COMMENT '施工例物件シーケンス'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('construction_property');
        Schema::dropIfExists('construction_property_seq');
    }
}
