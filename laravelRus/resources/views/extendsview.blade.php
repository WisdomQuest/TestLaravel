<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Заголовок страницы')</title>

</head>

<body>
<div> Шапка сайта</div>
<div>@importantMessage(Очень важное сообщение...)</div>
<div>
    @section('left')

        <div>Основное меню</div>
    @show
</div>
<div>
    @yield('content')
</div>



<div> Подвал</div>

</body>
</html>
