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
</body>
@endsection