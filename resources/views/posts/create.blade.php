<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>メッセージ作成画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body class='back'>
        <!--<a href='/'>投稿一覧ページへ戻る</a>-->
            <form action={{"/posts/".$folderId}} method="POST">
                @csrf
                <p class='posttitle'>
                    寄せ書き本文
                </p> 
                <div class="title">
                    <input type="text" name="post[body]" placeholder="タイトル"/>
                </div>
                <button type=“button”>送信</button>
            </form>
    </body>
</html>