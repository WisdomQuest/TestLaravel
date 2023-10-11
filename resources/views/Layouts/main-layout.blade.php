<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{$title ?? 'Заголовок страницы'}}</title>

</head>

<body>
<div> Шапка сайта</div>
<div>
    <div>Основное меню</div>
    {{$left}}
</div>
<div>
    {{$content}}
</div>
<div>
    {{$message}}
</div>
<div> Подвал</div>
</body>
</html>
