<!doctype html>
<html lang="ja">
@include('layout.head')
{{--  ページ独自のcssを参照  --}}
@yield('css')
@yield('js')
<body>
<!--ヘッダー-->
@include('layout.header')

<!--メイン-->
@yield('content')

<!--フッター-->
@include('layout.footer')

</body>

</html>
