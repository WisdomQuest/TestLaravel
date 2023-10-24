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
            -
            <a href="{{route('addresses.edit',['address'=> $address])}}">Редактировать</a>
            -
            <form action="{{route('addresses.destroy', ['address'=>$address])}}" name="delete" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="удалить">
            </form>
        </li>
    @endforeach

        <br>
        <a href="{{route('addresses.create')}}">Добавить адрес</a>

</ul>

</body>
</html>


