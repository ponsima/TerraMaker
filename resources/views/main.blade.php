@extends('layout.template')

@section('content')
    <!--メイン-->
    <main class="container">
        <div class="row">

            <h1 class="col s12 center textLine">TerraMaker</h1>

            <h6 class="col s12 center">texttexttexttext</h6>

            <form action="{{ route('create') }}" method="get" class="col s12 center formBtn">
                <button class="btn-large btnRange">
                    <h6>新しいプロジェクトを作成する
                        <i class="material-icons left">add</i>
                    </h6>
                </button>
            </form>
        </div>
    </main>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/main.js') }}"></script>
@endsection


