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
                <div class="category">
                    <h2>Category</h2>
                    <select name="folder[school_id]">
                        @foreach($schools as $school)
                            <option value="{{ $school->id }}">{{ $school->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type=“button”></button>
            </form>
    </body>
</html>