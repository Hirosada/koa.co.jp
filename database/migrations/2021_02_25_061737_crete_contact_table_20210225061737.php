<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteContactTable20210225061737 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacct', function (Blueprint $table) {
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8_general_ci';

            $table->bigInteger('contacct_id')->primary()->comment('お問い合わせID');
            $table->bigInteger('service_type')->nullable()->comment('サービス区分');
            $table->string('name', 255)->nullable()->comment('名前');
            $table->string('name_kana', 255)->nullable()->comment('ふりがな');
            $table->string('email_address', 255)->nullable()->comment('メールアドレス');
            $table->string('company_name', 255)->nullable()->comment('会社名');
            $table->string('department', 255)->nullable()->comment('部署名');
            $table->string('phone_number_1', 255)->nullable()->comment('電話番号1');
            $table->string('phone_number_2', 255)->nullable()->comment('電話番号2');
            $table->string('phone_number_3', 255)->nullable()->comment('電話番号3');
            $table->string('postal_code_1', 255)->nullable()->comment('郵便番号1');
            $table->string('postal_code_2', 255)->nullable()->comment('郵便番号2');
            $table->bigInteger('prefectures')->nullable()->comment('都道府県');
            $table->string('address_1', 255)->nullable()->comment('市区町村');
            $table->string('address_2', 255)->nullable()->comment('番地');
            $table->string('address_3', 255)->nullable()->comment('建物名');
            $table->mediumText('contact_contents')->nullable()->comment('お問い合わせ内容');
            $table->bigInteger('specializing_in_housing_question')->nullable()->comment('住宅専用質問');
            $table->string('contact_tittle', 255)->nullable()->comment('件名');
            $table->timestamp('form1_updated_at')->default(DB::raw('NOW()'))->comment('フォーム1更新日時');
            $table->timestamp('created_at')->default(DB::raw('NOW()'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('NOW()'))->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');

        });
        DB::statement("ALTER TABLE contacct COMMENT 'お問い合わせ'");

        Schema::create('contacct_seq', function (Blueprint $table) {
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8_general_ci';

            $table->bigInteger('contacct_id')->autoIncrement()->comment('お問い合わせID');
            $table->timestamp('created_at')->default(DB::raw('NOW()'))->comment('登録日時');
        });
        DB::statement("ALTER TABLE contacct_seq COMMENT 'お問い合わせシーケンス'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacct');
        Schema::dropIfExists('contacct_seq');
    }
}
