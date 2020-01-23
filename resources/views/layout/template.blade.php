<!doctype html>
<html lang="ja">
@include('layout.head')
{{--  ページ独自のcssを参照  --}}
@yield('css')
<body>
<!--ヘッダー-->
@include('layout.header')

<!--メイン-->
@yield('content')

<!--フッター-->
@include('layout.footer')

</body>
<script>
    $(document).ready(function(){
        $('ul.tabs').tabs();
    });
</script>

</html>
