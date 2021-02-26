<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->truncate();
        DB::table('news')->insert([
            [
                'news_id' => '1',
                'news_tittle' => '不法投棄に困っていませんか？',
                'news_contents' => '不法投棄対策のはり紙をしても後を立たない<br>ゴミの不法投棄をなくす為に作られたミニ鳥居です。<br>不法投棄者の心理的な効果を狙って製作しています。<br>',
                'news_display_started_at' => '2019-02-19 00:00:00',
                'news_display_finished_at' => '2025-02-19 00:00:00',
            ],
            [
                'news_id' => '2',
                'news_tittle' => 'プレミアム付住宅リフォーム券',
                'news_contents' => '不法投棄対策のはり紙をしても後を立たない<br>ゴミの不法投棄をなくす為に作られたミニ鳥居です。<br>不法投棄者の心理的な効果を狙って製作しています。<br>',
                'news_display_started_at' => '2019-02-19 00:00:00',
                'news_display_finished_at' => '2025-02-19 00:00:00',
            ],
            [
                'news_id' => '3',
                'news_tittle' => '須恵町プレミアム付住宅リフォーム券取扱加盟店になりました。',
                'news_contents' => '不法投棄対策のはり紙をしても後を立たない<br>ゴミの不法投棄をなくす為に作られたミニ鳥居です。<br>不法投棄者の心理的な効果を狙って製作しています。<br>',
                'news_display_started_at' => '2019-02-19 00:00:00',
                'news_display_finished_at' => '2025-02-19 00:00:00',
            ],
            [
                'news_id' => '4',
                'news_tittle' => '店舗の施工例を追加しました。',
                'news_contents' => '不法投棄対策のはり紙をしても後を立たない<br>ゴミの不法投棄をなくす為に作られたミニ鳥居です。<br>不法投棄者の心理的な効果を狙って製作しています。<br>',
                'news_display_started_at' => '2019-02-19 00:00:00',
                'news_display_finished_at' => '2025-02-19 00:00:00',
            ],
        ]);

    }
}
