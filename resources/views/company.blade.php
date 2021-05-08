
@extends('layouts.tmp')
@section('koa-contents')
<body class="mg0">
    <main>
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

        <div class="center mgT100px f20px">
            <span class="topic7">ABOUT US</span>
        </div>

        <div class="center mgT100px">
            <img src="img/001.jpg">
        </div>
        <div class="center mgT100px slide-bottom">
            <span class="topic7">時流を加えたファッションのようなスタイルを提案する株式会社興亜のインテリアショップ。<br>
                <p class="mgT50px">ヴィンテージを今に解釈したスタンダードなオリジナルアイテムと、<br>
                    ​トレンドが感じられる国内外の旬なブランドを組み合わせたテイストミックスのスタイルを提案します。<br></p>

                <p class="mgT100px">An interior shop of koa.inc that provides a fashion like trend and style.<br>
                Our standard item is interpreting vintage in modernness,<br>
                and we mix them with the trending brands from inside and outside Japan to create a mix taste style.</p>
            </span>
        </div>
        <div class="company-contents">
            <div class="content-inner">
                <div class="mgT150px center white">
                    <span class="topic7 f20px">代表挨拶</span>
                </div>
                <div class="clearfix mgT50px ceobox">
                    <div class="fL slide-left">
                        <img src="img/CEO.jpg">
                    </div>
                    <div class="fL w60 slide-right mgL60px">
                        <span class="lineH2 topic7 white">
                            株式会社イトクロのホームページをご覧いただきありがとうございます。<br>
                            イトクロは、強みである事業開発力を元に、メディアサービスとそれを軸にしたコンサルティングサービスを展開しております。<br>
                            メディアサービスにおいては、「塾ナビ」「みんなの学校情報」「家庭教師比較ネット」「医学部受験マニュアル」をはじめとした、教育業界に特化した領域特化型ポータルサイトを運営しております。また、コンサルティングサービスにおいては、メディアサービスの運営にて培ったノウハウを活用して、教育業界を中心としたクライアントの皆様へ、マーケティングにおけるコンサルティングサービスを提供しております。<br>
                            今後は、現在展開しているサービスの拡大や教育業界内の他領域への横展開を図ると共に、新規事業開発にも積極的に挑戦することで、継続的な成長を目指してまいります。
                            今後とも一層のご理解とご支援を賜りますようお願い申し上げます。<br>
                        <div class="fR" style="margin-top:30px;"><span class="topic8">株式会社興亜 代表取締役 CEO<br>長野　吉弘</span></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="center mgB100px">
            <span class="topic7 f20px">会社概要</span>
        </div>
        <div class="pd028">
            <ul class="lihidden underbar topic7">
                <li class="dspIB mgR50px w100px">会社名</li>
                <li class="dspIB">{{ $companyProfile['aboutUs'][0]['company_name']}}</li>
            </ul>
            <ul class="lihidden underbar topic7">
                <li class="dspIB mgR50px w100px">許可番号</li>
                <li class="dspIB">{{ $companyProfile['aboutUs'][0]['permission_number']}}</li>
            </ul>
            <ul class="lihidden underbar topic7">
                <li class="dspIB mgR50px w100px">建築業の種類</li>
                <li class="dspIB">{{ $companyProfile['aboutUs'][0]['types_of_industry']}}</li>
            </ul>
            <ul class="lihidden underbar topic7">
                <li class="dspIB mgR50px w100px">資本金</li>
                <li class="dspIB">{{ $companyProfile['aboutUs'][0]['capital']}}.円</li>
            </ul>
            <ul class="lihidden underbar topic7">
                <li class="dspIB mgR50px w100px">創業</li>
                <li class="dspIB">{{ $companyProfile['aboutUs'][0]['founded']}}</li>
            </ul>
            <ul class="lihidden underbar topic7">
                <li class="dspIB mgR50px w100px">法人設立</li>
                <li class="dspIB">{{ $companyProfile['aboutUs'][0]['establishment_of_corporation']}}</li>
            </ul>
            <ul class="lihidden underbar topic7">
                <li>所在地</li>
                <ul class="dspIB mgL165px">
                <li>本社：{{ $companyProfile['aboutUs'][0]['head_office_address']}}</li>
                <li>工場：{{ $companyProfile['aboutUs'][0]['factory_address']}}</li>
                </ul>
            </ul>
            <ul class="lihidden underbar topic7">
                <li class="dspIB mgR50px w100px">電話番号</li>
                <li class="dspIB">[TEL] {{ $companyProfile['aboutUs'][0]['company_phone_number']}} 　[FAX] {{ $companyProfile['aboutUs'][0]['company_fax_number']}}</li>
            </ul>
            <ul class="lihidden underbar topic7">
                <li class="dspIB mgR50px w100px">代表取締役</li>
                <li class="dspIB">{{ $companyProfile['aboutUs'][0]['ceo']}}</li>
            </ul>
            <ul class="lihidden underbar topic7">
                <li class="dspIB mgB30px">業務内容</li>
                <ul class="dspIB mgL165px">
                <li>住宅工事(新築・改築)　－企画から設計・施工・管理まで－</li>
                <li>デザインリフォーム　(内・外装リフォーム)</li>
                <li>木製家具の製造販売　(造作家具・学校家具・カウンター・特殊家具・パネル等)</li>
                <li>梱包用木枠の製造</li>
                <li>店舗の内装工事(新築・改築)</li>
                <li>公共工事</li>
                </ul>
            </ul>
            <ul class="lihidden underbar topic7">
                <li class="mgB30px">主要取引先</li>
                <ul class="dspIB mgL165px">
                @foreach ($companyProfile['suppliers'] as $company)
                    @if($company->transaction_type == '1')
                    <li>{{ $company->transaction_company_name }}</li>
                    @endif
                @endforeach
                </ul>
            </ul>
            <ul class="lihidden underbar topic7">
                <li>取引銀行</li>
                <ul class="dspIB mgL165px">
                    @foreach ($companyProfile['suppliers'] as $company)
                        @if($company->transaction_type == '2')
                            <li>{{ $company->transaction_company_name }}</li>
                        @endif
                    @endforeach
                </ul>
            </ul>
        </div>
  </main>
@endsection