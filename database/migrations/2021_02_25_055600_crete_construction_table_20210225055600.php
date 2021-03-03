<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteConstructionTable20210225055600 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('construction', function (Blueprint $table) {
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8_general_ci';

            $table->bigInteger('construction_id')->primary()->comment('施工ID');
            $table->string('construction_title', 255)->nullable()->comment('タイトル');
            $table->timestamp('form1_updated_at')->default(DB::raw('NOW()'))->comment('フォーム1更新日時');
            $table->timestamp('created_at')->default(DB::raw('NOW()'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('NOW()'))->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');

        });
        DB::statement("ALTER TABLE construction COMMENT '施工例'");

        Schema::create('construction_seq', function (Blueprint $table) {
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8_general_ci';

            $table->bigInteger('construction_id')->autoIncrement()->comment('施工ID');
            $table->timestamp('created_at')->default(DB::raw('NOW()'))->comment('登録日時');
        });
        DB::statement("ALTER TABLE construction_seq COMMENT '施工例シーケンス'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('construction');
        Schema::dropIfExists('construction_seq');
    }
}
