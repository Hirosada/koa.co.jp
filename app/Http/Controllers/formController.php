<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forms;
use App\Models\contact;

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

	// public function confirm(Request $request)
	// {
	// 	$inputs = $request->all();
	// 	$request->session()->put('input', $inputs);
	// 	return view('form_confirm', [
	// 		'input' => $inputs
	// 	]);
	// }

	public function complate()
    {
        return view('form_complate');
    }

	public function process(Request $request)
	{
		$action = $request->get('action', 'return');
		$input = $request->session()->get('input');		
		if($action === 'submit') {

				// DBにデータを保存
				$contact = new Contact();
				$contact->fill($input);
				$contact->save();

				// メール送信
				// Mail::to($input['email'])->send(new ContactMail('mails.contact', 'お問い合わせありがとうございます', $input));

				return redirect()->route('complate');
		} else {
				return redirect()->route('contact')->withInput($input);
				
		}
		if (!empty($request->session()->get('input'))) {
			$request->session()->forget('input');
		}
	}
		


	public function get_data(Request $request)
	{
		// 名前のバリデーション
		$errors = [];
		$name = $request->name;
		if (!$name){
			$errors ['name']= "名前は必須項目です。";
		} elseif ($request->name) {
			mb_convert_kana($name,'r','utf-8');
			preg_replace("/( |　)/", "", $request->name );
		}
		// フリガナのバリデーション
		$subname = $request->subname;
		if (!$subname){
			$errors ['subname']= "フリガナは必須項目です。";
		} elseif ($request->subname) {
			mb_convert_kana($subname,'r','utf-8');
			preg_replace("/( |　)/", "", $request->subname );
		}
		// メアドのバリデーション
		$email = $request->email;
		if ($email || $email == null) {
			if (preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD', $email)) {
				mb_convert_kana($email,'r','utf-8');

			}elseif (!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/iD', $email)) {
				$errors ['email']= "ご利用できないメールアドレスです。";
			}
		}
		// 電話番号のバリデーション
		$tel = $request->tel;
		if ($tel || $tel == null) {
			if (preg_match('/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/', $tel)) {

			} elseif (!preg_match('/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/', $tel)) {
				$errors['tel'] = "ご利用できない電話番号です。";
			}
		}
		// 郵便番号のバリデーション
		$postalCode = $request->postalCode;
		if ($postalCode || $postalCode == null) {
			if (preg_match('/^(([0-9]{3}-[0-9]{4})|([0-9]{7}))$/', $postalCode)) {
				mb_convert_kana($postalCode,'r','utf-8');

			}elseif (!preg_match('/^(([0-9]{3}-[0-9]{4})|([0-9]{7}))$/', $postalCode)) {
				$errors ['postalCode']= "ご利用できない郵便番号です";
			}
		}
		// 都道府県のバリデーション
		$address = $request->address;
		if (!$address) {
			$errors['address'] = "都道府県は入力必須項目です"; 
		}
		// 市町村のバリデーション
		$address2 = $request->address2;
		if (!$address2) {
			$errors['address2'] = "入力必須項目です"; 
		}
		// 丁目番地のバリデーション
		$subadress = $request->subadress;
		if (!$subadress) {
			$errors['subadress'] = "入力必須項目です"; 
		}
		// サービスタイプのバリデーション
		$servicetype = $request->servicetype;
		if ($servicetype == "--") {
			$errors['servicetype'] = "お問い合わせサービスを選択してください。";
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
		// お問い合わせ内容のバリデーション
		$inquiry = $request->inquiry;
		if (!$inquiry) {
			$errors['inquiry'] = "お問い合わせ内容を入力してください。"; 
		}
		if ($errors) {
			return view('contact', [
				'er'	=> $errors,
			]);
		}
		// return view('form_complate');
		$inputs = $request->all();
		$request->session()->put('input', $inputs);
		return view('form_confirm', ['input' => $inputs]);
		// return redirect()->route('aho');
	}
}