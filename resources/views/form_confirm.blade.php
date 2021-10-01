@extends('layouts.tmp')
@section('koa-contents')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ - 確認</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<form class="center contactForm" action="/process" method="POST">
@csrf
    <div class="container">
        <h1 class="text-center mt-2 mb-5">お問い合わせ確認</h1>
        <div class="container">
                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">名前<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <span>{{ $input['name'] }}</span>
                    </div>
                </div>
                <input type="hidden" name="name" value="{{ $input['name'] }}">

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">フリガナ<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <span>{{ $input['subname'] }}</span>
                    </div>
                </div>
                <input type="hidden" name="subname" value="{{ $input['subname'] }}">

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <span>{{ $input['email'] }}</span>
                    </div>
                </div>
                <input type="hidden" name="email" value="{{ $input['email'] }}">

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">メールアドレス(確認用)<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <span>{{ $input['confemail'] }}</span>
                    </div>
                </div>
                <input type="hidden" name="confemail" value="{{ $input['confemail'] }}">

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">電話番号</p>
                    <div class="col-sm-8">
                        <span>{{ $input['tel'] }}</span>
                    </div>
                </div>
                <input type="hidden" name="tel" value="{{ $input['tel'] }}">

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">会社名<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <span>{{ $input['company'] }}</span>
                    </div>
                </div>
                <input type="hidden" name="company" value="{{ $input['company'] }}">

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">部署名<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <span>{{ $input['departmant'] }}</span>
                    </div>
                </div>
                <input type="hidden" name="departmant" value="{{ $input['departmant'] }}">

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">郵便番号<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <span>{{ $input['postalCode'] }}</span>
                    </div>
                </div>
                <input type="hidden" name="postalCode" value="{{ $input['postalCode'] }}">

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">住所<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <span>{{ $input['address'] }}</span>
                        <span>{{ $input['address2'] }}</span>
                        <span>{{ $input['subadress'] }}</span>
                    </div>
                </div>
                <input type="hidden" name="address" value="{{ $input['address'] }}">
                <input type="hidden" name="address" value="{{ $input['address2'] }}">
                <input type="hidden" name="address" value="{{ $input['subadress'] }}">

                <div class="form-group row">
                    <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
                    <div class="col-sm-8">
                        <span>{{ $input['inquiry'] }}</span>
                    </div>
                </div>
                <input type="hidden" name="name" value="{{ $input['name'] }}">
 
                <div class="text-center">
                    <button name="action" type="submit" value="return" class="btn btn-dark">入力画面に戻る</button>
                    <button name="action" type="submit" value="submit" class="btn btn-primary">送信</button>
                </div>
        </div>
     </div>
</form>
</body>
</html> 