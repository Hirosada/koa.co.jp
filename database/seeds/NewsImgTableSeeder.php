<?php

use Illuminate\Database\Seeder;

class NewsImgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_img')->truncate();
        DB::table('news_img')->insert([
            [
                'news_img_id' => '1',
                'news_id' => '1',
                'img_path' => '/public/img/news/',
            ],
            [
                'news_img_id' => '2',
                'news_id' => '2',
                'img_path' => '/public/img/news/',
            ],
            [
                'news_img_id' => '3',
                'news_id' => '3',
                'img_path' => '/public/img/news/',
            ],
            [
                'news_img_id' => '4',
                'news_id' => '4',
                'img_path' => '/public/img/news/',
            ],
        ]);

    }
}
