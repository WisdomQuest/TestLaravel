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
        <div class="cart">количество товаров в корзине: <h4> {{$numberProduct}}  </h4><br/>
            <h4> {{$totalSum}} @currency(usd) </h4>
        </div>
    </div>
<?php session()->put('price', $totalSum)?>
<?php session()->put('product', $numberProduct)?>

    {{--<x-form name="Ivan" email = 'fff@mail'/>--}}
    <div>
         {{$message}}
    </div>


</body>
</html>
