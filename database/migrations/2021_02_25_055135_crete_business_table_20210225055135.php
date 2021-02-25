<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteBusinessTable20210225055135 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8_general_ci';

            $table->bigInteger('business_id')->primary()->comment('業務ID');
            $table->bigInteger('company_id')->nullable()->comment('会社ID');
            $table->bigInteger('business_type')->nullable()->comment('業務区分');
            $table->string('business_name', 255)->nullable()->comment('業務名');
            $table->mediumText('business_contents')->nullable()->comment('業務内容');
            $table->timestamp('form1_updated_at')->default(DB::raw('NOW()'))->comment('フォーム1更新日時');
            $table->timestamp('created_at')->default(DB::raw('NOW()'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('NOW()'))->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');

        });
        DB::statement("ALTER TABLE business COMMENT '業務内容'");

        Schema::create('business_seq', function (Blueprint $table) {
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8_general_ci';

            $table->bigInteger('business_id')->autoIncrement()->comment('業務ID');
            $table->timestamp('created_at')->default(DB::raw('NOW()'))->comment('登録日時');
        });
        DB::statement("ALTER TABLE business_seq COMMENT '業務内容シーケンス'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business');
        Schema::dropIfExists('business_seq');
    }
}
