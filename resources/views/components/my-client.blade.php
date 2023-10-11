<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{$title ?? 'Заголовок страницы'}}</title>

</head>
<body>

{{--{{\Illuminate\Support\Js::from($client)}}--}}


    <div>
        <p>Клиенты</p>
        {{$client}}
        <p>корзина</p>
        {{$basket}}
    </div>


    {{--<x-form name="Ivan" email = 'fff@mail'/>--}}
    <div>
         {{$message}}
    </div>


</body>
</html>
