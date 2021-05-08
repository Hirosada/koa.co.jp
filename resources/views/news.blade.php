
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
    <div class="contents">
        <div class="content_inner">
            <div class="center　topic7 f30px">
                <span>News</span>
            </div>
            <div class="center clearfix mgT50px">
            <ul class="fL topic7 lihidden imgHover">
                <a href="#" class="textnone white">
                    <li><img src="img/news/torii.jpg" width="259" height="194"></li>
                    <li class="topic4 f15px">News</li>
                    <li class="topic6">2019.10.5</li>
                    <li>不法投棄で困ってませんか？</li>
                </a>
            </ul>
            <ul class="fL topic7 lihidden imgHover">
                <a href="#" class="textnone white">
                    <li><img src="img/news/premiumu.jpg" width="259" height="194"></li>
                    <li class="topic4 f15px">News</li>
                    <li class="topic6">2018.6.20</li>
                    <li>プレミアム付住宅リフォーム券</li>
                </a>
            </ul>
            <ul class="fL topic7 lihidden imgHover">
                <a href="#" class="textnone white">
                    <li><img src="img/news/ticket.jpg" width="259" height="194"></li>
                    <li class="topic4 f15px">News</li>
                    <li class="topic6">2018.5.4</li>
                    <li>須恵町プレミアム付住宅リフォーム券 <br>取扱加盟店になりました。</li>
                </a>
            </ul>
            <ul class="fL topic7 lihidden imgHover">
                <a href="#" class="textnone white">
                    <li><img src="img/works/royal.jpg" width="259" height="194"></li>
                    <li class="topic4 f15px">Notice</li>
                    <li class="topic6">2018.4.19</li>
                    <li>店舗の施工例を追加しました。</li>
                </a>
            </ul>
        </div>
    </div>
</body>
  @endsection
