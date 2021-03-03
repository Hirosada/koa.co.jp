<?php

use Illuminate\Database\Seeder;

class ConstructionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('construction')->truncate();
        DB::table('construction')->insert([
            [
                'construction_id' => '1',
                'construction_title' => '店舗',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_id' => '2',
                'construction_title' => '商業',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_id' => '3',
                'construction_title' => '文化施設',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_id' => '4',
                'construction_title' => 'リフォーム',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_id' => '5',
                'construction_title' => 'リノベーション',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
