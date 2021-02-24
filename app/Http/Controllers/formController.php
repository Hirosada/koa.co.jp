<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forms;

class FormController extends Controller
{
  private $form;

  public function  __costruct(Forms $instanceClass)
  {
    $this->Form = $instanceClass;
  }

  public function index() 
  {
    return view('contact');
  }

  public function get_data(Request $request)
  {
    // 名前のバリデーション
    $Err = [];
    $name = $request->name;
    if (!$name){
      $Err []= "名前は必須項目です。";
    } elseif ($request->name) {
      mb_convert_kana($name,'r','utf-8');
      preg_replace("/( |　)/", "", $request->name );

    }
    // メアドのバリデーション
    $email = $request->email;
    if ($email) {
      if (preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD', $email)) {
        mb_convert_kana($email,'r','utf-8');

      }elseif (!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD', $email)) {
        $Err []= "ご利用できないメールアドレスです。";
      }
    }
    // 電話番号のバリデーション
    $tel = $request->tel;
    if ($tel) {
      if (preg_match('/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/', $tel)) {

      } elseif (!preg_match('/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/', $tel)) {
        $Err[] = "ご利用できない電話番号です。";
      }
    }
    // サービスタイプ
    $servicetype = $request->servicetype;
    if (!$servicetype) {
      $Err[] = "お問い合わせサービスを選択してください。";
    } else {
      if ($servicetype = "1") {
        $servicetype = "店舗デザイン";
      } elseif ($servicetype ="2") {
        $servicetype = "デザイン家具";
      } elseif ($servicetype = "3") {
        $servicetype = "製函"; 
      } elseif ($servicetype ="4") {
        $servicetype = "その他";
      }
      
    }
    $inquiry = $request->inquiry;
    if (!$inquiry) {
      $Err[] = "お問い合わせ内容を入力してください。"; 
    }



    if ($Err) {
      // return view('contact', compact($Err));
    }

    return view('form_complate');
  }
}