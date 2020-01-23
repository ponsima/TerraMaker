@extends('layout.template')

@section('content')
    <!--メイン-->
    <main class="container">
        <div class="row">
            <h1 class="center-align">TerraMaker</h1>

            <h6 class="center-align">texttexttexttext</h6>

            <a href="{{ route('create') }}" class="col s6 offset-s3 createBtn">
                <h6 class="center-align hoge">新しいプロジェクトを作成する</h6>
            </a>
        </div>
    </main>


    <script>
        $(document).ready(function () {
            $('ul.tabs').tabs();
        });
    </script>

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection


