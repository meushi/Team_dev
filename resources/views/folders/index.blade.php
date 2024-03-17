<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>トップページ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>オンライン寄せ書き</h1>
        <!--<a href='/'>投稿一覧ページへ戻る</a>-->
        <input/>
            @foreach ($allfolder as $folder)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>{{$folder->title}}</p>
                </div>
            @endforeach
        <button type=“button” onclick="location.href='URL入れる寄せ書きファイル作成画面」に遷移する。'">寄せ書き一覧</button>
    </body>
</html>