<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function preset(Request $request) {

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

    public function confirm(Request $request)
    {

    }

}
