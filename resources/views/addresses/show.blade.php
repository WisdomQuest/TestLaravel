<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Адрес {{$address->address}}</title>
</head>
<body>

<p>{{$address->address}} </p>
<a href="{{route('addresses.index')}}">вернутся к списку</a>

</body>
</html>

