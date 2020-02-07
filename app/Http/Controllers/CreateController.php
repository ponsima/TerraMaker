<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function preset(Request $request) {

//        バリデーション
        $inputs = $request->all();

        $rules = [
            'fileName' => 'required|alpha_dash|regex:/^[a-zA-Z0-9]+[a-zA-Z0-9-_]+$/',
        ];

        $messages = [
//            空欄不可
            'fileName.required' => 'フォルダ名は必須',
//            特殊文字不可
            'fileName.alpha_dash' => 'フォルダ名が不正',
//            日本語不可
            'fileName.regex' => 'フォルダ名が不正'
        ];

        $validation = Validator::make($inputs, $rules, $messages);

        if ($validation->fails()){
            // 前のページにリダイレクトさせる
            // その際、エラーメッセージをinputデータとともに変数を渡す
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

//        formの値を変数へ格納
        $fileName = $request->fileName;
        $provider = $request->provider;

//        変数の中身をセッションに保存
//        $request->session()->reflash();
//        $request->session()->flash('fileName', $fileName);
//        $request->session()->flash('provider', $provider);

        return view('preset')->with([
            'fileName' => $fileName,
            'provider' => $provider
//            'fileName' => session()->get('fileName'),
//            'provider' => session()->get('provider'),
        ]);
    }

    public function setting(Request $request) {


        $fileName = $request->fileName;
        $provider = $request->provider;
        $preset = $request->preset;

//        $request->session()->flash('preset', $preset);

        return view('setting')->with([
//            'fileName' => session()->get('fileName'),
            'fileName' => $fileName,
            'provider' => $provider,
            'preset' => $preset,
//            'provider' => session()->get('provider'),
//            'preset'   => session()->get('preset'),
        ]);
    }

    public function finish() {
        return view('finish');
    }

}
