<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteCompanyProfileTable20210225052440 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profile', function (Blueprint $table) {
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8_general_ci';

            $table->bigInteger('company_id')->primary()->comment('会社ID');
            $table->string('company_name', 255)->nullable()->comment('会社名');
            $table->string('permission_number', 255)->nullable()->comment('許可番号');
            $table->string('types_of_industry', 255)->nullable()->comment('建築業の種類');
            $table->bigInteger('capital')->nullable()->comment('資本金');
            $table->string('founded')->nullable()->comment('創業');
            $table->string('establishment_of_corporation')->nullable()->comment('法人設立');
            $table->string('head_office_postal_code', 255)->nullable()->comment('所在地 本社 郵便番号');
            $table->string('head_office_address', 255)->nullable()->comment('所在地 本社 郵便番号');
            $table->string('factory_postal_code', 255)->nullable()->comment('所在地 工場 郵便番号');
            $table->string('factory_address', 255)->nullable()->comment('所在地 工場 住所');
            $table->string('company_phone_number', 255)->nullable()->comment('電話番号');
            $table->string('company_fax_number', 255)->nullable()->comment('FAX番号');
            $table->string('ceo', 255)->nullable()->comment('代表取締役');
            $table->timestamp('form1_updated_at')->default(DB::raw('NOW()'))->comment('フォーム1更新日時');
            $table->timestamp('created_at')->default(DB::raw('NOW()'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('NOW()'))->comment('更新日時');
            $table->timestamp('deleted_at')->nullable()->comment('削除日時');

        });
        DB::statement("ALTER TABLE company_profile COMMENT '会社概要'");

        Schema::create('company_profile_seq', function (Blueprint $table) {
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8_general_ci';

            $table->bigInteger('company_id')->autoIncrement()->comment('会社ID');
            $table->timestamp('created_at')->default(DB::raw('NOW()'))->comment('登録日時');
        });
        DB::statement("ALTER TABLE company_profile_seq COMMENT '会社概要シーケンス'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_profile');
        Schema::dropIfExists('company_profile_seq');
    }
}
