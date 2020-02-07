@extends('layout.template')

@section('content')
    <!--メイン-->
    <main class="container">
        <h4 class="center-align">新しいプロジェクトを作成する</h4>

        <div class="col s12 center">
            <div class="breadcrumb-list">
                <span class="breadcrumb first">プロジェクト名</span>
                <span class="breadcrumb second">プリセット</span>
                <span class="breadcrumb third">設定</span>
            </div>
        </div>

        <form action="{{ route('preset') }}" method="post" class="col s12">
            <div class="row">
                @csrf
                <div class="input-field col s6 offset-s3 folderName">
                    <i class="material-icons prefix">folder_open</i>
                    <input id="folderName" type="text" name="fileName" class="validate" placeholder=""
                           value="{{ old('fileName') }}">
                    <label for="folderName" class="truncate">プロジェクトフォルダ</label>
                    @if ($errors->has('fileName'))
                        <span class="helper-text red-text">{{ $errors->first('fileName') }}</span>
                    @endif
                </div>

                <div class="input-field col s6 offset-s3 cloudName">
                    <i class="material-icons prefix">cloud_queue</i>
                    <select id="cloudName" name="provider">
                        <option value disabled>使用したいクラウドを選択してください</option>
                        <option value="aws">AWS</option>
                        <option value="gcp" disabled>GCP</option>
                        <option value="azure" disabled>Azure</option>
                    </select>
                    <label for="cloudName">プロバイダー</label>
                </div>
            </div>

            <div class="row">
                <div class="col offset-s3">
                    <label for="ignoreBtn" class="ignore-str">
                        <span>.gitignoreを作成する（推奨）</span>
                    </label>
                </div>
                <div class="col offset-s2">
                    <div class="switch">
                        <label>
                            <input type="checkbox" id="ignoreBtn" checked/>
                            <span class="lever"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12 center btn-range">
                    <button class="btn-origin btn-large waves-effect waves-light" type="button" name="action"
                            onclick="window.location='{{ route("home") }}'">キャンセル
                        <i class="material-icons left">arrow_back</i>
                    </button>

                    <button class="btn-origin btn-large waves-effect waves-light" type="submit">次へ進む
                        <i class="material-icons right">arrow_forward</i>
                    </button>
                </div>
            </div>
        </form>
    </main>
@endsection

{{-- css --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

{{-- js --}}
@section('js')
    <script src="{{ asset('js/create.js') }}"></script>
@endsection
