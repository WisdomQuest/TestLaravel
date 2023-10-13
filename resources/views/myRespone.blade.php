<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <title>Заголовок</title>

</head>
<body>

{{--{{url()->temporarySignedRoute('activate', now()->addSecond('30')}}--}}

<a href="{{url()->temporarySignedRoute('timeDownload', now()->addSecond(200))}}">Скачать файл</a>
{{--<a href="/downloadtime">Скачать файл</a>--}}
{{--{{response()->file('index.php')}}--}}
{{--{{response('просто строка', 200)}}--}}


</body>
</html>
