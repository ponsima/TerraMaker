@extends('layout.template')

@section('content')
    <main class="container">
        <h4 class="center-align">新しいプロジェクトを作成する</h4>

        <div class="col s12 center">
            <div class="breadcrumb-list">
                <span class="breadcrumb first">プロジェクト名</span>
                <span class="breadcrumb second">プリセット</span>
                <span class="breadcrumb third">設定</span>
            </div>
        </div>

        <form action="{{ route('setting') }}" method="post">
            @csrf
            <input type="hidden" name="fileName" value="{{ $fileName }}">
            <input type="hidden" name="provider" value="{{ $provider }}">

            <h6 class="center-left">プリセットを選択する</h6>
            <div class="row">
                <label for="default">
                    <div class="card-panel hoverable radio-range">
                        <label>
                            <input id="default" type="radio" name="preset" value="default" checked />
                            <span>
                                <span class="font">デフォルト（DBなし）</span>
                            </span>
                        </label>
                        <p>VPC, Subnet, ,EC2(apache)</p>
                    </div>
                </label>

                <label for="robust">
                    <div class="card-panel hoverable radio-range">
                        <label>
                            <input id="robust" type="radio" name="preset" value="robust" disabled="disabled" />
                            <span>
                                <span class="font">デフォルト（DBあり）</span>
                            </span>
                        </label>
                        <p>VPC, Subnet, EC2(Apache), Amazon RDS</p>
                    </div>
                </label>

                <label for="manual">
                    <div class="card-panel hoverable radio-range">
                        <label>
                            <input id="manual" type="radio" name="preset" value="manual" disabled="disabled" />
                            <span>
                                <span class="font">手動</span>
                            </span>
                        </label>
                    </div>
                </label>

                <div class="row">
                    <div class="col s12 center btn-range">
                        <button class="btn-origin btn-large waves-effect waves-light" type="button" name="action"
                                onclick="history.back()">戻る
                            <i class="material-icons left">arrow_back</i>
                        </button>

                        <button class="btn-origin btn-large waves-effect waves-light" type="submit">次へ進む
                            <i class="material-icons right">arrow_forward</i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </main>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/preset.css') }}">
@endsection


