<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>メッセージ作成画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <!--<a href='/'>投稿一覧ページへ戻る</a>-->
            <form action={{"/posts/".$folderId}} method="POST">
                @csrf
                <div class="title">
                    <input type="text" name="post[body]" placeholder="タイトル"/>
                </div>
                <button type=“button”>送信</button>
            </form>
    </body>
</html>