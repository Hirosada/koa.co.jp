<?php

use Illuminate\Database\Seeder;

class ConstructionContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('construction_contents')->truncate();
        DB::table('construction_contents')->insert([
            [
                'construction_contents_id' => '1',
                'construction_id' => '2',
                'construction_img_path' => 'img/works/driving.jpg',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_contents_id' => '2',
                'construction_id' => '1',
                'construction_img_path' => 'img/works/royal.jpg',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_contents_id' => '3',
                'construction_id' => '1',
                'construction_img_path' => 'img/works/kensokuen.jpg',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_contents_id' => '4',
                'construction_id' => '3',
                'construction_img_path' => 'img/works/museum.jpg',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_contents_id' => '5',
                'construction_id' => '1',
                'construction_img_path' => 'img/works/mochitto.jpg',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_contents_id' => '6',
                'construction_id' => '3',
                'construction_img_path' => 'img/works/phoenix.jpg',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_contents_id' => '7',
                'construction_id' => '4',
                'construction_img_path' => 'img/works/mansion01.jpg',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_contents_id' => '8',
                'construction_id' => '4',
                'construction_img_path' => 'img/works/mansion04.jpg',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_contents_id' => '9',
                'construction_id' => '5',
                'construction_img_path' => 'img/works/ttei_title.jpg',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
            [
                'construction_contents_id' => '10',
                'construction_id' => '5',
                'construction_img_path' => 'img/works/title.jpg',
                'form1_updated_at' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
