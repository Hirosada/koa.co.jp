<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>トップページ | 株式会社興亜</title>
    <link href="css/top.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/base.css" rel="stylesheet">
    <link href="css/swiper.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans|Saira+Stencil+One|Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Allerta+Stencil|Permanent+Marker|Ropa+Sans|Saira+Stencil+One|Sawarabi+Mincho&display=swap" rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-fadethis-master/dist/jquery.fadethis.min.js"></script>
  </head>

  @yield('koa-contents')

  <footer class="footerSection mgT150px pd100 center">
        <div>
          <div class="center relative">
            <a href="/top"><img src="img/KOA-footer_logo.png" width="150px"></a>
            <img src="img/message.png" width="250px" class="message_posi">
          </div>
          <div class="mgT150px">
            <ul class="lihidden" class="lihidden f20px center">
              <li class="dspIB"><a href="/news" class="textnone white topic7 mgR50px"> News </a></li>
              <li class="dspIB"><a href="/company" class="textnone white topic7 mgR50px"> About US </a></li>
              <li class="dspIB"><a href="/service" class="textnone white topic7 mgR50px"> Service </a></li>
              <li class="dspIB"><a href="/works" class="textnone white topic7 mgR50px"> Works </a></li>
              <li class="dspIB"><a href="/form" class="textnone white topic7 mgR50px"> Contact </a></li>
              <li class="dspIB"><a href="/index" class="textnone white topic7 mgR50px"> Top </a></li>
            </ul>
          </div>
          <div class="center mgT150px">
            <ul>
              <li class="dspIB white topic7 mgR50px"><a href="/form" class="textnone white topic7 mgR50px">お問い合わせ</a></li>
              <li class="dspIB white topic7 mgR50px"><a href="/news" class="textnone white topic7 mgR50px">お知らせ</a></li>
              <li class="dspIB white topic7 mgR50px"><a href="/top" class="textnone white topic7 mgR50px">トップページへ</a></li>
              <li class="dspIB white topic7 mgR50px"><a href="#" class="textnone white topic7 mgR50px">採用情報</a></li>
            </ul>
          </div>
          <div class="center mgT150px">
            <span class="topic7 white">copyright(C) koa co.,ltd All rights reserved.</span>
          </div>
        </div>
      </footer>
      <script>
       $(window).fadeThis();
      </script>
  </body>
  </html>
