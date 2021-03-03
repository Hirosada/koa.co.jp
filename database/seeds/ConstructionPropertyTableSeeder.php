<?php

use Illuminate\Database\Seeder;

class ConstructionPropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('construction_property')->truncate();
        DB::table('construction_property')->insert([
            [
                'construction_property_id' => '1',
                'construction_id' => '2',
                'property_name' => '福岡市自動車学校案内所',
                'construction_contents_id' => '1',
                'location' => '福岡市',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_property_id' => '2',
                'construction_id' => '1',
                'property_name' => '下関ロイヤルボール',
                'construction_contents_id' => '2',
                'location' => '山口県下関',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_property_id' => '3',
                'construction_id' => '1',
                'property_name' => '健足園',
                'construction_contents_id' => '3',
                'location' => '福岡市大名',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_property_id' => '4',
                'construction_id' => '3',
                'property_name' => '中村美術館',
                'construction_contents_id' => '4',
                'location' => '田川市',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_property_id' => '5',
                'construction_id' => '1',
                'property_name' => 'もちっとクイズモール店',
                'construction_contents_id' => '5',
                'location' => '博多区東那珂',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_property_id' => '6',
                'construction_id' => '3',
                'property_name' => 'フェニックス',
                'construction_contents_id' => '6',
                'location' => '宮崎市',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_property_id' => '7',
                'construction_id' => '4',
                'property_name' => 'マンションリフォーム',
                'construction_contents_id' => '7',
                'location' => '福岡市博多区',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_property_id' => '8',
                'construction_id' => '4',
                'property_name' => 'マンションリフォーム',
                'construction_contents_id' => '8',
                'location' => '福岡市六本松',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_property_id' => '9',
                'construction_id' => '5',
                'property_name' => '福岡市T邸 リノベーション工事',
                'construction_contents_id' => '9',
                'location' => '福岡市西区',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_property_id' => '10',
                'construction_id' => '5',
                'property_name' => 'マンションリノベーション　K様邸',
                'construction_contents_id' => '10',
                'location' => '福岡市中央区',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
