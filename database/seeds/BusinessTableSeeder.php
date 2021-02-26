<?php

use Illuminate\Database\Seeder;

class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business')->truncate();
        DB::table('business')->insert([
            [
                'business_id' => '1',
                'company_id' => '1',
                'business_type' => '1',
                'business_name' => '長年の実績で大切な商品を安全に守る 木箱ー製函ー',
                'business_contents' => 
                '当社は、昭和16年３月に福岡市東区にて創業以来、梱包用木枠製造を扱っております。
                長年培ってきたノウハウを生かして、
                大事な 製品を安全に送ることをモットーに製作して参りました。
                破損トラブルを防ぐ為に製品の特性、重量など輸送条件に合わせて木枠を製作致しますので、
                衝撃に弱い精密機械などの製品も安心安全に運搬することが出来ます。',
            ],
            [
                'business_id' => '2',
                'company_id' => '1',
                'business_type' => '2',
                'business_name' => '洗練された空間と魅力的な演出 店舗デザイン',
                'business_contents' => 
                '興亜では、屋外サインのイメージデザインも含めた、
                商業施設、文化施設、医療施設など店舗デザイン事業を展開しています。
                企画・設計・施工まで一貫して自社で行っていますので、
                無駄もありませんし、サポートも充実しています。
                また、お店がオープンした後のアドバイス等も行っておりますので、何でもご相談下さい。',
            ],
            [
                'business_id' => '4',
                'company_id' => '1',
                'business_type' => '3',
                'business_name' => '憧れた空気が流れる私の空間 デザイン家具',
                'business_contents' => 
                '家具を作る会社だから出来る、ぴったりはまる建具
                当社では、家具や、作り付け家具の製作を行っております。
                そこでお客様にご提案できるのは、それぞれの住宅に合った家具作りです。
                合っていれば、より空間を広く使え、なおかつ全体の雰囲気の調和もいいです。',
            ],
        ]);

    }
}
