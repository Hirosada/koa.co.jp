
  @extends('layouts.tmp')
  @section('koa-contents')
  <body class="mg0">
    <div class="relative"width="100%" height="20%">
      <video src="img/video/seven_films--the_british_museum.mp4" autoplay playsinline muted loop width="100%"></video>
      <img src="img/KOA-logo.png" width="150px" class="topLogo">
      <img src="img/top_message.png" width="250px" class="top_title_v">
      <ul class="lihidden f20px center menu_posi">
        <li class="dspIB"><a href="/" class="textnone white topic7 mgR50px menuHover"> News </a></li>
        <li class="dspIB"><a href="{{ route('company.profile') }}" class="textnone white topic7 mgR50px menuHover"> About Us </a></li>
        <li class="dspIB"><a href="/service" class="textnone white topic7 mgR50px menuHover"> Service </a></li>
        <li class="dspIB"><a href="/works" class="textnone white topic7 mgR50px menuHover"> Works </a></li>
        <li class="dspIB"><a href="/form" class="textnone white topic7 mgR50px menuHover"> Contact </a></li>
        <li class="dspIB"><a href="/index" class="textnone white topic7 mgR50px menuHover"> Top</a></li>
      </ul>
    </div>
    <div>
      <div class="center mgT50px w100">
        <span class="topic7 f30px">News</span>
        <div class="w100">
          @foreach ($newsList as $news)
            <ul class="mgT100px topic7 lihidden dspIB slide-bottom">
              <a href="/news/detail/{{ $news->news_id }}" class="textnone black">
                  <li><img src="img/news/top/{{ $news->news_id }}.jpg" width="259" height="194"></li>
                  <li class="topic4 f15px">New</li>
                  <li class="topic6">{{ $news->news_display_started_at }}</li>
                  <li>{{ $news->news_tittle }}</li>
              </a>
            </ul>
          @endforeach
        </div>
    </div>
    <div class="anime center mgT100px">
      <a href="{{ route('news.top') }}" class="btn topic7 cp textnone">Read More</a>
    </div>
  </div>

  <div class="center mgT100px">
    <span class="topic7 f30px">Service</span>
  </div>

  @foreach ($businessList as $business)
    <div class="mgT100px center">
      <div class="w50 slide-left dspIB mgR20px">
        <h2 class="topic7">{{ $business->business_name }}</h2>
        <span class="topic7 lineH3">{{ $business->business_contents }}
        </span>
      </div>
      <div class="slide-right dspIB">
        <img src="img/service/top/{{ $business->business_id }}.jpg" width="400" height="320">
      </div>
    </div>
    <div class="center mgT50px">
      <a href="{{ route('business.detail',['$business_id' => $business->business_id]) }}" class="textnone"><span class="btn topic7 cp">Read More</span></a>
    </div>
  @endforeach
  <div class="center mgT100px">
    <span class="topic7 f30px">Access</span>
  </div>

  <div class="mgT100px clearfix" style="padding: 0 8%;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6646.093458232709!2d130.492035!3d33.604092!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3541856cb412a433%3A0x76277dd421e9be9b!2z5pel5pys44CB44CSODExLTIxMTIg56aP5bKh55yM57Of5bGL6YOh6aCI5oOg55S65aSn5a2X5qSN5pyo77yR77yY77yY77yT4oiS77yR!5e0!3m2!1sja!2sus!4v1570253145614!5m2!1sja!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="fL"></iframe>

    <div class="topic7 fL mgL100px center lineH5">
      <span>本社：福岡県福岡市東区筥松2丁目6番9号</span><br>
      <span>工場：福岡県糟屋郡須恵町大字植木字中野1883-1</span><br>
      <span><a href="tel:092-621-1194" class="textnone black">[TEL] 092-621-1194 </a>　[FAX] 092-621-1225</span>
    </div>
  </div>
</body>
@endsection