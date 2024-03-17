<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>フォルダ作成画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <!--<a href='/'>投稿一覧ページへ戻る</a>-->
            <form action="/folders" method="POST">
                @csrf
                <div class="title">
                    <input type="text" name="folder[title]" placeholder="タイトル"/>
                </div>
            </form>
        <button type=“button” onclick="location.href='URL入れる、トップページ」に遷移する。'">作成</button>
    </body>
</html>