<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{$foldertitle}}</h1>
        <a href={{'/posts/create/'.$folderId}}>寄せ書きの作成</a>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        {{ $post->body }}
                    </p>
                </div>
            @endforeach
        </div>
        
    </body>
</html>
