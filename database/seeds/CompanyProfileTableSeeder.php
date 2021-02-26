<?php

use Illuminate\Database\Seeder;

class CompanyProfileTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_profile')->truncate();
        DB::table('company_profile')->insert([
            [
                'company_id' => '1',
                'company_name' => '株式会社興亜',
                'permission_number' => '福岡県知事　許可(般-18)　第63799号',
                'types_of_industry' => '建築工事業・内装仕上工事業',
                'capital' => '10000000',
                'founded' => '昭和16年3月',
                'establishment_of_corporation' => '昭和28年3月',
                'head_office_postal_code' => '',
                'head_office_address' => '福岡県福岡市東区筥松2丁目6番9号',
                'factory_postal_code' => '',
                'factory_address' => '福岡県糟屋郡須恵町大字植木字中野1883-1',
                'company_phone_number' => '092-621-1194',
                'company_fax_number' => '092-621-1225',
                'ceo' => '長野吉弘',
            ],
        ]);

    }
}
