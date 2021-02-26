
  @extends('layouts.tmp')
  @section('koa-contents')
  <body class="mg0">
    <div class="relative"width="100%" height="20%">
      <video src="img/video/seven_films--the_british_museum.mp4" autoplay playsinline muted loop width="100%"></video>
      <img src="img/KOA-logo.png" width="150px" class="topLogo">
      <img src="img/top_message.png" width="250px" class="top_title_v">
      <ul class="lihidden f20px center menu_posi">
        <li class="dspIB">
          <a href="/news" class="textnone white topic7 mgR50px menuHover"> News </a>
        </li>
        <li class="dspIB"><a href="/company" class="textnone white topic7 mgR50px menuHover"> About Us </a></li>
        <li class="dspIB"><a href="/service" class="textnone white topic7 mgR50px menuHover"> Service </a></li>
        <li class="dspIB"><a href="/works" class="textnone white topic7 mgR50px menuHover"> Works </a></li>
        <li class="dspIB"><a href="/form" class="textnone white topic7 mgR50px menuHover"> Contact </a></li>
        <li class="dspIB"><a href="/index" class="textnone white topic7 mgR50px menuHover"> Top</a></li>
      </ul>
    </div>
    <div>
      <div class="center clearfix mgT50px slide-bottom sectionbg" style="padding: 0 79px;">
        <div class="center mgT100px">
          <span class="topic7 f30px">News</span>
        </div>
        @foreach ($newsList as $news)
          <ul class="fL topic7 lihidden imgHover">
            <a href="#" class="textnone black">
              <li><img src="img/news/torii.jpg" width="259" height="194"></li>
              <li class="topic4 f15px">News</li>
              <li class="topic6">{{ $news->news_display_started_at }}</li>
              <li>{{ $news->news_tittle }}</li>
            </a>
          </ul>
        @endforeach
    </div>
    <div class="anime center mgT100px slide-bottom">
      <a href="/todo" class="btn topic7 cp textnone">Read More</a>
    </div>
  </div>

  <div class="center mgT100px">
    <span class="topic7 f30px">Service</span>
  </div>


  <!-- 木箱 -->
  <div class="clearfix mgT100px center">
    <div class="fL w50 mgL100px slide-left">
      <h2 class="topic7">木箱ー製函ー</h2>
      <span class="topic7 lineH3">
        当社は、昭和16年３月に福岡市東区にて創業以来、梱包用木枠製造を扱っております。<br>
        長年培ってきたノウハウを生かして、<br>
        大事な 製品を安全に送ることをモットーに製作して参りました。<br>
        破損トラブルを防ぐ為に製品の特性、重量など輸送条件に合わせて木枠を製作致しますので、<br>
        衝撃に弱い精密機械などの製品も安心安全に運搬することが出来ます。
      </span>
    </div>
    <div class="fL mgL30px slide-right">
      <img src="img/service/seikan_1.jpg">
    </div>
  </div>
  <div class="center mgT50px">
    <a href="#" class="textnone"><span class="btn topic7 cp">Read More</span></a>
  </div>

  <!-- 店舗デザイン -->
  <div class="clearfix mgT100px center">
    <div class="fL w50 mgL100px mgT100px slide-left">
      <h2 class="topic7">店舗デザイン</h2>
      <span class="topic7 lineH3">
      興亜では、屋外サインのイメージデザインも含めた、<br>商業施設、文化施設、医療施設など店舗デザイン事業を展開しています。<br>
      企画・設計・施工まで一貫して自社で行っていますので、<br>無駄もありませんし、サポートも充実しています。<br>
      また、お店がオープンした後のアドバイス等も行っておりますので、何でもご相談下さい。
      </span>
    </div>
    <div class="fL mgL30px mgT100px slide-right">
      <img src="img/service/tenpo_1.jpg" class="img_box">
    </div>
  </div>
  <div class="center mgT50px">
    <a href="#" class="textnone"><span class="btn topic7 cp">Read More</span></a>
  </div>

  <!-- デザイン家具 -->
  <div class="clearfix mgT100px center">
    <div class="fL w50 mgL100px mgT100px slide-left">
      <h2 class="topic7">デザイン家具</h2>
      <span class="topic7 lineH3">
        <span class="topic7 f20px">家具を作る会社だから出来る、ぴったりはまる建具</span><br>
        当社では、家具や、作り付け家具の製作を行っております。<br>
        そこでお客様にご提案できるのは、それぞれの住宅に合った家具作りです。<br>
        合っていれば、より空間を広く使え、なおかつ全体の雰囲気の調和もいいです。
      </span>
    </div>
    <div class="fL mgL30px mgT100px slide-right">
      <img src="img/service/kagu_1.jpg" class="img_box">
    </div>
  </div>
  <div class="center mgT50px">
    <a href="#" class="textnone"><span class="btn topic7 cp">Read More</span></a>
  </div>

  <div class="center mgT100px">
    <span class="topic7 f30px">Access</span>
  </div>

  <div class="mgT100px clearfix" style="padding: 0 8%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6646.093458232709!2d130.492035!3d33.604092!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541856cb412a433%3A0x76277dd421e9be9b!2z5pel5pys44CB44CSODExLTIxMTIg56aP5bKh55yM57Of5bGL6YOh6aCI5oOg55S65aSn5a2X5qSN5pyo77yR77yY77yY77yT4oiS77yR!5e0!3m2!1sja!2sus!4v1570253145614!5m2!1sja!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="fL slide-left"></iframe>

    <div class="topic7 fL mgL100px center lineH5 slide-right">
      <span>本社：福岡県福岡市東区筥松2丁目6番9号</span><br>
      <span>工場：福岡県糟屋郡須恵町大字植木字中野1883-1</span><br>
      <span><a href="tel:092-621-1194" class="textnone black">[TEL] 092-621-1194 </a>　[FAX] 092-621-1225</span>
    </div>
  </div>
</body>
@endsection