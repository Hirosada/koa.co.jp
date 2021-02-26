<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->truncate();
        DB::table('suppliers')->insert([
            [
                'suppliers_id' => '1',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '福岡県',
                'display_order' => '1',
            ],
            [
                'suppliers_id' => '2',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '福岡市',
                'display_order' => '2',
            ],
            [
                'suppliers_id' => '3',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '福岡市交通局',
                'display_order' => '3',
            ],
            [
                'suppliers_id' => '4',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '福岡市水道局',
                'display_order' => '4',
            ],
            [
                'suppliers_id' => '5',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '福岡市（県）住宅供給公社',
                'display_order' => '5',
            ],
            [
                'suppliers_id' => '6',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '公共工事',
                'display_order' => '6',
            ],
            [
                'suppliers_id' => '7',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '昭和鉄工株式会社',
                'display_order' => '7',
            ],
            [
                'suppliers_id' => '8',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => 'リックス株式会社',
                'display_order' => '8',
            ],
            [
                'suppliers_id' => '9',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '株式会社アキラ水産',
                'display_order' => '9',
            ],
            [
                'suppliers_id' => '10',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '株式会社オフィス・エヌ',
                'display_order' => '10',
            ],
            [
                'suppliers_id' => '11',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '七洋物産株式会社',
                'display_order' => '11',
            ],
            [
                'suppliers_id' => '12',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '株式会社デザインアートセンター',
                'display_order' => '12',
            ],
            [
                'suppliers_id' => '13',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '株式会社東洋エンタープライズ（下関ロイヤルボウル）',
                'display_order' => '13',
            ],
            [
                'suppliers_id' => '14',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '株式会社乃村工藝社九州支店　 (順不同)',
                'display_order' => '14',
            ],
            [
                'suppliers_id' => '15',
                'company_id' => '1',
                'transaction_type' => '1',
                'transaction_company_name' => '株式会社阪急建装',
                'display_order' => '15',
            ],
            [
                'suppliers_id' => '16',
                'company_id' => '1',
                'transaction_type' => '2',
                'transaction_company_name' => '福岡銀行　箱崎支店',
                'display_order' => '1',
            ],
            [
                'suppliers_id' => '17',
                'company_id' => '1',
                'transaction_type' => '2',
                'transaction_company_name' => '西日本シティ銀行　キャナルシティ博多支店',
                'display_order' => '2',
            ],
        ]);

    }
}
