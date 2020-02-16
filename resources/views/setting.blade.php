@extends('layout.template')

@section('content')
    <main class="container">
        <h4 class="center-align">新しいプロジェクトを作成する</h4>

        @include('layout.Breadcrumbs')

        <form action="{{ route('download') }}" method="post">
            @csrf
            <input type="hidden" name="fileName" value="{{ $fileName }}">

            <div class="row">
                <div class="input-field col offset-s2 s8 key-range">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="text" placeholder="" id="accessKey" name="accessKey">
                    <label for="accessKey">アクセスキー</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col offset-s2 s8 key-range key-range2">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="text" placeholder="" id="secretKey" name="secretKey">
                    <label for="secretKey">シークレットキー</label>
                </div>
            </div>

            <div class="row hoge">
                <div class="col offset-s2 s10 deployLink">
                    <i class="material-icons col aaa">web</i>
                    <div class="col valign-wrapper">
                        <h6>https://github.com/</h6>
                    </div>
                    <div class="col">
                        <input type="text" name="gitUsername">
                    </div>
                    <div class="col valign-wrapper">
                        <h6>/</h6>
                    </div>
                    <div class="col">
                        <input type="text" name="gitRepository">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 center btn-range">
                    <button class="btn-origin btn-large waves-effect waves-light" type="button" name="action"
                            onclick="history.back()">戻る
                        <i class="material-icons left">arrow_back</i>
                    </button>

                    <button class="btn-origin btn-large waves-effect waves-light download-method" type="submit" formtarget="_blank">作成する
                        <i class="material-icons right">check</i>
                    </button>
                </div>
            </div>
        </form>
    </main>
@endsection

{{-- css --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/setting.css') }}">
@endsection

{{-- js --}}
@section('js')
    <script src="{{ asset('js/downloaded.js') }}"></script>
@endsection

