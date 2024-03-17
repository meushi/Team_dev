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
        <a href='/folder/create'>フォルダの作成</a>
            @foreach ($allfolder as $folder)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <a href={{'/folder/'.$folder->id}}>{{$folder->title}}</a>
                </div>
            @endforeach
        <a href='/folders/create'>寄せ書き作成</a>
    </body>
</html>