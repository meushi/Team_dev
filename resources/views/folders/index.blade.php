<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>トップページ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @vite('resources/css/app.css')
        
    </head>
    <body>
        <h1 class="text-red-500">オンライン寄せ書き</h1>
        <!--<a href='/'>投稿一覧ページへ戻る</a>-->
        <a class='text-4xl' href='/folder/create'>フォルダの作成</a>
            <div class='folders'>
                @foreach ($allfolder as $folder)
                    <div style='border:solid 1px; margin-bottom: 20px;'>
                        <a class='foldertitle'href={{'/folder/'.$folder->id}}>{{$folder->title}}</a>
                    </div>
                @endforeach
            </div>
    </body>
</html>