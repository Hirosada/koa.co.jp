
@extends('layouts.tmp')
@section('koa-contents')
<body class="mg0">
    <div class="center relative">
        <a href="/top">
            <img src="img/KOA-logo.png" width="150px">
        </a>
        <img src="img/top_message.png" width="250px" class="message_posi">
    </div>
    <ul class="lihidden f20px center mgT50px">
        <li class="dspIB"><a href="/news" class="textnone black topic7 mgR50px menu2Hover"> News </a></li>
        <li class="dspIB"><a href="/company" class="textnone black topic7 mgR50px menu2Hover"> About Us </a></li>
        <li class="dspIB"><a href="/service" class="textnone black topic7 mgR50px menu2Hover"> Service </a></li>
        <li class="dspIB"><a href="/works" class="textnone black topic7 mgR50px menu2Hover"> Works </a></li>
        <li class="dspIB"><a href="/form" class="textnone black topic7 mgR50px menu2Hover"> Contact </a></li>
        <li class="dspIB"><a href="/top" class="textnone black topic7 mgR50px menu2Hover"> Top</a></li>
    </ul>
    <div class="center mgT50px relative">
        <img src="img/works_mv.jpg" width="100%">
        <span class="title_posi topic7 f50px"><span class="topic7 f30px">for</span>Works</span>
    </div>
    <div class="center">
        <div class="center mgB100px">
            <h2 class="topic7 mgT100px">施工例</h2>
        </div>
        <!-- 店舗　商業　文化施設 -->
        <span class="topic7 f30px">店舗　商業　文化施設</span>
        <div class="mgT50px">
            @foreach ($arrConstructionOne as $key => $item)
                <ul class="dspIB cp_tilt" style="width:216px;">
                    <a href="#" class="textnone topic7 black">
                        <li class="lihidden"><img src="{{ $item->constructionContents[0]->construction_img_path }}"></li>
                        <li class="lihidden">{{$item->property_name}}<br>（{{$item->location}}）</li>
                    </a>
                </ul>
            @endforeach
            <!-- 隠す -->
            <ul class="dspIB cp_tilt hidden" style="width:216px;">
                <a href="#" class="textnone topic7 black">
                    <li class="lihidden"><img src="img/works/okeda.jpg"></li>
                    <li class="lihidden">おけだ内科クリニック<br>（福岡市赤坂）</li>
                </a>
            </ul>
            <ul class="dspIB cp_tilt hidden" style="width:216px;">
                <a href="#" class="textnone topic7 black">
                    <li class="lihidden"><img src="img/works/youki.jpg"></li>
                    <li class="lihidden">高齢者向け有料賃貸住宅 工事<br>（直方市）</li>
                </a>
            </ul>
            <ul class="dspIB cp_tilt hidden" style="width:216px;">
                <a href="#" class="textnone topic7 black">
                    <li class="lihidden"><img src="img/works/shimatuka.jpg"></li>
                    <li class="lihidden f15px">エントランスホールリニュアル<br>（福岡市城西）</li>
                </a>
            </ul>
            <ul class="dspIB cp_tilt hidden" style="width:216px;">
                <a href="#" class="textnone topic7 black">
                    <li class="lihidden"><img src="img/works/nagaike.jpg"></li>
                    <li class="lihidden f15px">池永修子整骨院造作建具<br>（糟屋郡志免町）</li>
                </a>
            </ul>
            <ul class="dspIB cp_tilt hidden" style="width:216px;">
                <a href="#" class="textnone topic7 black">
                    <li class="lihidden"><img src="img/works/pola.jpg"></li>
                    <li class="lihidden f15px">POLA THE BEAUTY<br>（北九州市黒崎）</li>
                </a>
            </ul>
            <ul class="dspIB cp_tilt hidden" style="width:216px;">
                <a href="#" class="textnone topic7 black">
                    <li class="lihidden"><img src="img/works/koa_0327.jpg"></li>
                    <li class="lihidden f15px">VITO Cafe イオンモール店<br>（福津市）</li>
                </a>
            </ul>
            <ul class="dspIB cp_tilt hidden" style="width:216px;">
                <a href="#" class="textnone topic7 black">
                    <li class="lihidden"><img src="img/works/nishikudai.jpg"></li>
                    <li class="lihidden f15px">西久大運輸倉庫(株)<br>北九州通運営業所改装工事</li>
                </a>
            </ul>
            <ul class="dspIB cp_tilt hidden" style="width:216px;">
                <a href="#" class="textnone topic7 black">
                    <li class="lihidden"><img src="img/works/top_work.jpg"></li>
                    <li class="lihidden f15px">セレクトショップ R<br>福岡市中央区</li>
                </a>
            </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_2.jpg"></li>
                <li class="lihidden f15px">西方税理士事務所<br>（福岡市中央区）</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/jhotel.jpg"></li>
                <li class="lihidden f15px">博多区<br>Ｊホテル１Ｆレストラン</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/arancino.jpg"></li>
                <li class="lihidden f15px">アランティーノ　柚須<br>（糟屋郡粕屋町）</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/parking01.jpg"></li>
                <li class="lihidden f15px">有料駐車場リフォーム工事<br>（福岡市博多区）</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_3.jpg"></li>
                <li class="lihidden f15px">ポーラさわらびガーデン<br>八幡店</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_4.jpg"></li>
                <li class="lihidden f15px">センスオブプレイス<br>天神地下街店</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_5.jpg"></li>
                <li class="lihidden f15px">バー店舗<br>（北九州市）</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_6.jpg"></li>
                <li class="lihidden f15px">西九大運輸倉庫(株)改修工事<br>（佐賀県神埼市）</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_7.jpg"></li>
                <li class="lihidden f15px">リバーウォーク北九州<br>（北九州市）</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_8.jpg"></li>
                <li class="lihidden f15px">リバーウォーク北九州キタムラ<br>（北九州市）</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_9.jpg"></li>
                <li class="lihidden f15px">きゅうでん<br>e-住まいる</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_10.jpg"></li>
                <li class="lihidden f15px">稚加栄<br>福岡空港店</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_11.jpg"></li>
                <li class="lihidden f15px">西久大運輸倉庫(株)<br>岡山支店新築工事</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_12.jpg"></li>
                <li class="lihidden f15px">e-住まいる<br>北九州展示設備工事</li>
            </a>
        </ul>
        <ul class="dspIB cp_tilt hidden" style="width:216px;">
            <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="img/works/top_work_13.jpg"></li>
                <li class="lihidden f15px">株式会社アクタ<br>展示室改装工事</li>
            </a>
        </ul>
    </div>
    <div class="center mgT100px">
        <button type="button" id="more_btn" class="btn topic7 cp">More</button>
    </div>
    <!-- リノベーション -->
    <div class="center mgT100px">
        <span class="topic7 f30px">リフォーム　リノベーション</span>
    </div>
    <div class="mgT50px center">
        @foreach ($arrConstructionTwo as $key => $val)
            <ul class="dspIB cp_tilt " style="width:216px;">
                <a href="#" class="textnone topic7 black">
                <li class="lihidden"><img src="{{ $val->constructionContents[0]->construction_img_path }}"></li>
                <li class="lihidden">{{ $val->property_name }}<br>（{{ $val->location }}）</li>
                </a>
            </ul>
        @endforeach
    </div>
    <div class="center mgT100px">
        <span class="btn topic7 cp">More</span>
    </div>
    <!-- 公共工事実績 -->
    <div class="center mgT100px">
        <span class="topic7 f30px">公共工事実績</span>
    </div>
    <div class="center topic7 mgT100px">
        <span>東浜山団地個別改善工事（福岡県）</span>
    </div>
    <div class="mgT50px center underbar">
        <ul>
            <li class="dspIB"><img src="img/works2/higashihama1_bf.jpg"><span class="topic7 dspB">14棟(Before)</span></li>
            <li class="dspIB"><img src="img/works2/yajirusi.jpg"></li>
            <li class="dspIB"><img src="img/works2/higashihama1_af.jpg"><span class="topic7 dspB">14棟(After)</span></li>
        </ul>
        <ul>
            <li class="dspIB"><img src="img/works2/higashihama2_bf.jpg"><span class="topic7 dspB">14棟(Before)</span></li>
            <li class="dspIB"><img src="img/works2/yajirusi.jpg"></li>
            <li class="dspIB"><img src="img/works2/higashihama2_af.jpg"><span class="topic7 dspB">14棟(After)</span></li>
        </ul>
        <ul>
            <li class="dspIB"><img src="img/works2/higashihama3_bf.jpg"><span class="topic7 dspB">14棟(Before)</span></li>
            <li class="dspIB"><img src="img/works2/yajirusi.jpg"></li>
            <li class="dspIB"><img src="img/works2/higashihama3_af.jpg"><span class="topic7 dspB">14棟(After)</span></li>
        <ul>
    </div>

    <div class="center topic7 mgT50px">
        <span>福岡市植物園トイレ改修工事　（福岡市）</span>
    </div>
    <div class="center">
        <h2 class="topic7 mgT50px">施工前</h2>
        <ul class="lihidden">
            <li class="dspIB"><img src="img/works2/koukyou1_bf.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou2_bf.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou3_bf.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou4_bf.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou_bf.jpg" width="173" height="130"></li>
        </ul>
    </div>
    <div class="center mgT50px">
        <span class="btn topic7 cp">More</span>
    </div>
    <div class="center">
        <h2 class="topic7 mgT50px">施工後</h2>
        <ul class="lihidden">
            <li class="dspIB"><img src="img/works2/koukyou1_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou2_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou3_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou4_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou_af.jpg" width="173" height="130"></li>
        </ul>
    </div>
    <div class="center mgT50px underbar">
        <span class="btn topic7 cp">More</span>
    </div>
    <div class="center topic7 mgT50px">
        <span>福岡県立高等学校武道場吊天井改修工事　（福岡県）</span>
    </div>
    <div class="center mgT50px">
        <h2 class="topic7">剣道場：施工前</h2>
        <ul class="lihidden">
            <li class="dspIB"><img src="img/works2/koukyou5_bf.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou6_bf.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou10_bf.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou11_bf.jpg" width="173" height="130"></li>
        </ul>
    </div>
    <div class="center mgT50px">
        <h2 class="topic7">剣道場：施工後</h2>
        <ul class="lihidden">
            <li class="dspIB"><img src="img/works2/koukyou5_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou6_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou10_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou11_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou12_af.jpg" width="173" height="130"></li>
        </ul>
    </div>
    <div class="center mgT50px">
        <h2 class="topic7">柔道場：施工前</h2>
        <ul class="lihidden">
            <li class="dspIB"><img src="img/works2/koukyou15_bf.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou16_bf.jpg" width="173" height="130"></li>
        </ul>
    </div>
    <div class="center mgT50px underbar">
        <h2 class="topic7">柔道場：施工後</h2>
        <ul class="lihidden">
            <li class="dspIB"><img src="img/works2/koukyou15_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou16_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou17_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou14_bf.jpg" width="173" height="130"></li>
        </ul>
    </div>

    <div class="center topic7 mgT50px">
        <span>某住宅火災復旧工事（福岡市）</span>
    </div>
    <div class="center mgT50px">
        <h2 class="topic7">施工前</h2>
        <ul class="lihidden">
            <li class="dspIB"><img src="img/works2/koukyou7_bf.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou8_bf.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou9_bf.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou17_bf.jpg" width="173" height="130"></li>
        </ul>
    </div>
    <div class="center mgT50px underbar">
        <h2 class="topic7">施工後</h2>
        <ul class="lihidden">
            <li class="dspIB"><img src="img/works2/koukyou7_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou8_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou9_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou19_af.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou18_af.jpg" width="173" height="130"></li>
        </ul>
    </div>

    <div class="center topic7 mgT50px">
        <span>多田羅大橋公園便所改築工事　（福岡市）</span>
    </div>
    <div class="center mgT50px underbar">
        <ul class="lihidden">
            <li class="dspIB"><img src="img/works2/koukyou20.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou21.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou22.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou23.jpg" width="173" height="130"></li>
            <li class="dspIB"><img src="img/works2/koukyou24.jpg" width="173" height="130"></li>
        </ul>
    </div>

    <div class="center topic7 mgT50px">
        <span>東平尾公園博多の森弓道場改修工事（福岡市）</span>
    </div>
    <div class="mgT50px center underbar">
        <ul>
            <li class="dspIB"><img src="img/works2/koukyou25_bf.jpg"><span class="topic7 dspB">(Before)</span></li>
            <li class="dspIB"><img src="img/works2/yajirusi.jpg"></li>
            <li class="dspIB"><img src="img/works2/koukyou25_af.jpg"><span class="topic7 dspB">(After)</span></li>
        </ul>
        <ul>
            <li class="dspIB"><img src="img/works2/koukyou26_bf.jpg"><span class="topic7 dspB">(Before)</span></li>
            <li class="dspIB"><img src="img/works2/yajirusi.jpg"></li>
            <li class="dspIB"><img src="img/works2/koukyou26_af.jpg"><span class="topic7 dspB">(After)</span></li>
        </ul>
        <ul>
            <li class="dspIB"><img src="img/works2/koukyou27_bf.jpg"><span class="topic7 dspB">(Before)</span></li>
            <li class="dspIB"><img src="img/works2/yajirusi.jpg"></li>
            <li class="dspIB"><img src="img/works2/koukyou27_af.jpg"><span class="topic7 dspB">(After)</span></li>
        </ul>
        <ul>
            <li class="dspIB"><img src="img/works2/koukyou28_bf.jpg"><span class="topic7 dspB">(Before)</span></li>
            <li class="dspIB"><img src="img/works2/yajirusi.jpg"></li>
            <li class="dspIB"><img src="img/works2/koukyou28_af.jpg"><span class="topic7 dspB">(After)</span></li>
        </ul>
        <ul>
            <li class="dspIB"><img src="img/works2/koukyou29_bf.jpg"><span class="topic7 dspB">(Before)</span></li>
            <li class="dspIB"><img src="img/works2/yajirusi.jpg"></li>
            <li class="dspIB"><img src="img/works2/koukyou29_af.jpg"><span class="topic7 dspB">(After)</span></li>
        </ul>
    </div>    
    <div class="center topic7 mgT50px">
        <span>香椎浜団地個別改善工事（福岡県）</span>
    </div>
    <div class="mgT50px center underbar">
        <ul>
            <li class="dspIB"><img src="img/works2/koukyou02.jpg"><span class="topic7 dspB">５－２棟(Before)</span></li>
            <li class="dspIB"><img src="img/works2/yajirusi.jpg"></li>
            <li class="dspIB"><img src="img/works2/koukyou01.jpg"><span class="topic7 dspB">５－２棟(After)</span></li>
        </ul>
        <ul>
            <li class="dspIB"><img src="img/works2/koukyou03.jpg"><span class="topic7 dspB">５－3棟(Before)</span></li>
            <li class="dspIB"><img src="img/works2/yajirusi.jpg"></li>
            <li class="dspIB"><img src="img/works2/koukyou04.jpg"><span class="topic7 dspB">５－3棟(After)</span></li>
        </ul>
    </div>
</body>
@endsection