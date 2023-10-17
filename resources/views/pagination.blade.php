<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Pagination</title>
<style>
    nav {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding: 1rem;
    }
    nav a, nav span {
        margin: 0 1rem;
        padding: 1rem;
        text-decoration: none;
        color: #007bFF;
        border: 1px solid #7abaff;
        border-radius: 5px;
        transition: 0.5s all ease;
    }
    nav span {
        color: #721c24;
        border-color: #721c24;
    }
    nav a:hover {
        background-color: #007bFF;
        color: #fff;
    }
</style>
</head>

<body>
        <h1>Комментарии (Страница: {{$comments->currentPage()}} )</h1>
        @foreach($comments as $comment)
            <div>
                <p><b>{{$comment->name}}:</b> {{$comment->text}}</p>
            </div>
        @endforeach
{{$comments->links('mypagination')}}
</body>
</html>
