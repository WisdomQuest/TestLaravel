<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Адреса</title>
</head>
<body>

<ul>
    @foreach($addresses as $address)
        <li>
            <a href="{{route('addresses.show',['address'=> $address])}}">{{$address->address}}</a>
        </li>
    @endforeach
</ul>

</body>
</html>


