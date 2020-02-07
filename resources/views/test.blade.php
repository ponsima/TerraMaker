@extends('layout.template')

@section('content')
    <main class="container">
        <h1 class="animated fadeInLeft">Example</h1>

        <div class="info">
            <svg>
                <text class="textline">hoge</text>
            </svg>
        </div>
    </main>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('./css/test.css') }}">
@endsection


