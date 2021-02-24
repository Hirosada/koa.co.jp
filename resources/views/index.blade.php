<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>koa.inc</title>
  <!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/top.css" rel="stylesheet">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Stencil+One|Sawarabi+Mincho&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ropa+Sans|Saira+Stencil+One|Sawarabi+Mincho&display=swap" rel="stylesheet">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js"></script>
</head>
<body class="mg0">
  <div class="overlay-navigation">
    <nav role="navigation">
      <ul>
        <li><a href="/top" data-content="トップページ" class="topic4">Top Page</a></li>
        <li><a href="/news" data-content="ニュース" class=" topic4">News</a></li>
        <li><a href="/company" data-content="会社概要" class="topic4">About us</a></li>
        <li><a href="/service" data-content="サービス" class=" topic4">Service</a></li>
        <li><a href="/works" data-content="施工例" class="topic4">Works</a></li>
        <li><a href="/form" data-content="お問い合わせ" class="topic4">Contact</a></li>
      </ul>
    </nav>
  </div>
  <section class="home">
    <div class="open-overlay">
      <span class="bar-top"></span>
      <span class="bar-middle"></span>
      <span class="bar-bottom"></span>
    </div>
    <svg class="center title">
      <text class="w100 center topic7 f29px" x="0" y="48%">CO,LTD</text>
      <text class="w100 center topic7 f80px" x="15%" y="90%">KOA</text>
    </svg>
    <div class="topLogo">
      <img src="img/KOA-logo_top2.png" width="150px">
    </div>
  </section>
  <ul class="lihidden bottom subtext">
    <li class="dspI mgR30px">
      <a href="#" class="textnone mgR15px topic7 black">address: 福岡市東区筥松2丁目6番9号</a>
    </li>
    <li class="dspI topic7 mgR80px black">tell: 092-621-1194 / mail:<a href="#" class="textnone black"> hirosada.n@gmail.com</a></li>
  </ul>
  <div class="message"><img src="img/top_message.png" width="500px"></div>

<script type="text/javascript">
  $('.open-overlay').click(function() {
       $('.open-overlay').css('pointer-events', 'none');
       var overlay_navigation = $('.overlay-navigation'),
         top_bar = $('.bar-top'),
         middle_bar = $('.bar-middle'),
         bottom_bar = $('.bar-bottom');

       overlay_navigation.toggleClass('overlay-active');
       if (overlay_navigation.hasClass('overlay-active')) {

         top_bar.removeClass('animate-out-top-bar').addClass('animate-top-bar');
         middle_bar.removeClass('animate-out-middle-bar').addClass('animate-middle-bar');
         bottom_bar.removeClass('animate-out-bottom-bar').addClass('animate-bottom-bar');
         overlay_navigation.removeClass('overlay-slide-up').addClass('overlay-slide-down')
         overlay_navigation.velocity('transition.slideLeftIn', {
           duration: 300,
           delay: 0,
           begin: function() {
             $('nav ul li').velocity('transition.perspectiveLeftIn', {
               stagger: 150,
               delay: 0,
               complete: function() {
                 $('nav ul li a').velocity({
                   opacity: [1, 0],
                 }, {
                   delay: 10,
                   duration: 140
                 });
                 $('.open-overlay').css('pointer-events', 'auto');
               }
             })
           }
         })

       } else {
         $('.open-overlay').css('pointer-events', 'none');
         top_bar.removeClass('animate-top-bar').addClass('animate-out-top-bar');
         middle_bar.removeClass('animate-middle-bar').addClass('animate-out-middle-bar');
         bottom_bar.removeClass('animate-bottom-bar').addClass('animate-out-bottom-bar');
         overlay_navigation.removeClass('overlay-slide-down').addClass('overlay-slide-up')
         $('nav ul li').velocity('transition.perspectiveRightOut', {
           stagger: 150,
           delay: 0,
           complete: function() {
             overlay_navigation.velocity('transition.fadeOut', {
               delay: 0,
               duration: 300,
               complete: function() {
                 $('nav ul li a').velocity({
                   opacity: [0, 1],
                 }, {
                   delay: 0,
                   duration: 50
                 });
                 $('.open-overlay').css('pointer-events', 'auto');
               }
             });
           }
         })
       }
     })
</script>
</body>
</html>