<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Новость </title>
</head>
<body>

<h2>{{$news->title}}</h2>
<h5>{{$news->text}}</h5>

<a href="{{route('news.index')}}">вернутся к списку</a>

</body>
</html>
