@extends('layout.template')

@section('content')
    <main class="container">
        <div class="row">
            <h4 class="center-align">プロジェクトを作成しました</h4>
            <form action="{{ route("home") }}" method="get" class="col s6 center offset-s3">
                <button class="btn-large">
                    Topへ戻る
                </button>
            </form>
        </div>
    </main>
@endsection
