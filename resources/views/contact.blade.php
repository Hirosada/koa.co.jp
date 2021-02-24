
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

    <form class="center contactForm" action="complate" method="POST">
      @csrf
      <div>
        <fieldset>
          <span class="f20px topic7 black">Contact</span>
          <div class="form-group mgT50px topic7 black">
            <span style="color: red;">※必須</span><br>
            <label for="exampleInputEmail1">名前</label>
            <input type="name" class="form-control form-fram" id="exampleInputEmail1" name="name"  placeholder="例）田中　太郎">
          </div>
          <div class="form-group mgT50px topic7 black">
            <span style="color: red;">※必須</span><br>
            <label for="exampleInputEmail1">フリガナ</label>
            <input type="name" class="form-control form-fram" id="exampleInputEmail1" name="subname" placeholder="例）タナカ　タロウ">
          </div>
          <div class="form-group mgT50px topic7 black">
            <span style="color: red;">※必須</span><br>
            <label for="exampleInputEmail1">メールアドレス</label>
            <input class="form-control form-fram" id="exampleInputEmail1" name="email" placeholder="例）info@exam.co.jp">
          </div>
          <div class="form-group mgT50px topic7 black">
            <span style="color: red;">※必須</span><br>
            <label for="exampleInputPassword1">メールアドレス（確認用）</label>
            <input class="form-control form-fram" id="exampleInputPassword1" name="confemail" placeholder="例）info@exam.co.jp">
          </div>
          <div class="form-group mgT50px topic7 black">
            <span style="color: red;">※必須</span><br>
            <label for="exampleInputPassword1">電話番号</label>
            <input class="form-control form-fram" id="exampleInputPassword1" name="tel" placeholder="例）xxx-xxxx-xxxx">
          </div>
          <div class="form-group mgT50px topic7 black">
            <label for="exampleInputPassword1">会社名</label>
            <input class="form-control form-fram" id="exampleInputPassword1" name="company" placeholder="例）株式会社XXXX">
          </div>
          <div class="form-group mgT50px topic7 black">
            <label for="exampleInputPassword1">部署名</label>
            <input class="form-control form-fram" id="exampleInputPassword1" name="departmant" placeholder="例）XXXX部">
          </div>
          <div class="form-group mgT50px topic7 black">
            <span style="color: red;">※必須</span><br>
            <label for="exampleInputPassword1">郵便番号</label>
            <input class="form-control form-fram" id="exampleInputPassword1" name="postalCode" placeholder="例）XXX-XXX">
          </div>
          <div class="form-group mgT50px topic7 black">
            <span style="color: red;">※必須</span><br>
            <label for="exampleInputPassword1">住所</label>
            <select class="form-control form-fram w50 mg0A" id="exampleSelect1" name="address">
              <option value="" selected>都道府県</option>
              <option value="北海道">北海道</option>
              <option value="青森県">青森県</option>
              <option value="岩手県">岩手県</option>
              <option value="宮城県">宮城県</option>
              <option value="秋田県">秋田県</option>
              <option value="山形県">山形県</option>
              <option value="福島県">福島県</option>
              <option value="茨城県">茨城県</option>
              <option value="栃木県">栃木県</option>
              <option value="群馬県">群馬県</option>
              <option value="埼玉県">埼玉県</option>
              <option value="千葉県">千葉県</option>
              <option value="東京都">東京都</option>
              <option value="神奈川県">神奈川県</option>
              <option value="新潟県">新潟県</option>
              <option value="富山県">富山県</option>
              <option value="石川県">石川県</option>
              <option value="福井県">福井県</option>
              <option value="山梨県">山梨県</option>
              <option value="長野県">長野県</option>
              <option value="岐阜県">岐阜県</option>
              <option value="静岡県">静岡県</option>
              <option value="愛知県">愛知県</option>
              <option value="三重県">三重県</option>
              <option value="滋賀県">滋賀県</option>
              <option value="京都府">京都府</option>
              <option value="大阪府">大阪府</option>
              <option value="兵庫県">兵庫県</option>
              <option value="奈良県">奈良県</option>
              <option value="和歌山県">和歌山県</option>
              <option value="鳥取県">鳥取県</option>
              <option value="島根県">島根県</option>
              <option value="岡山県">岡山県</option>
              <option value="広島県">広島県</option>
              <option value="山口県">山口県</option>
              <option value="徳島県">徳島県</option>
              <option value="香川県">香川県</option>
              <option value="愛媛県">愛媛県</option>
              <option value="高知県">高知県</option>
              <option value="福岡県">福岡県</option>
              <option value="佐賀県">佐賀県</option>
              <option value="長崎県">長崎県</option>
              <option value="熊本県">熊本県</option>
              <option value="大分県">大分県</option>
              <option value="宮崎県">宮崎県</option>
              <option value="鹿児島県">鹿児島県</option>
              <option value="沖縄県">沖縄県</option>
            </select>
            <div class="form-group mgT50px topic7 black">
              <input class="form-control form-fram" id="exampleInputPassword1" name="aderess2" placeholder="市町村">
            </div>
            <div class="form-group mgT50px topic7 black">
              <input class="form-control form-fram" id="exampleInputPassword1" name="subadress" placeholder="丁目番地">
            </div>
          <div class="form-group mgT50px">
            <label for="exampleSelect1">お問い合わせサービス</label>
            <select class="form-control form-fram" id="exampleSelect1" name="servicetype">
              <option>--</option>
              <option value="1">店舗デザイン</option>
              <option value="2">デザイン家具</option>
              <option value="3">製函（木箱）</option>
              <option value="4">その他</option>
            </select>
          </div>
          
          <div class="form-group mgT50px">
            <label for="exampleTextarea">お問い合わせ内容</label>
            <textarea class="form-control form-fram" id="exampleTextarea" rows="3" style="height: 300px" name="inquiry"></textarea>
          </div>
          <a href="#">
            <input type="submit" class="btn btn-primary" value="確認画面へ"
          </a>
        </fieldset>
      </div>
    </form>

    @endsection
  