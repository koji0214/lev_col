<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CREATE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <form action="/posts" method="POST">
            {{ csrf_field()  }}
            <div class="title">
                <h2>タイトル（〜30文字）</h2>
                <input type="text" id="title" name="post[title]" required maxlength="30" size="30" placeholder="タイトル">
            
            </div>
            
            <div class="body">
                <h2>本文</h2>
                <textarea type="text" id="content" name="post[body]" size="100"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        

        
        <div class="back">
            <a href="/">戻る</a>
        </div>
    </body>
</html>