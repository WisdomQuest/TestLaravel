<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Laravel</title>

</head>

<body>
<p>a: {{$a}}</p>
<p>a: {!! $b !!}</p>
<p>@{{a}}</p>
@php
    $x =12;

@endphp
{{$x}}

@if(is_numeric($c))
    <p> a - the number</p>
@elseif(is_string($c))
    <p>a -the string</p>
@endif

@isset($x)
    <p>{{$x}} существует</p>
@endisset

@switch($c)
    @case(1)
        <p>1</p>
        @break
    @case(2)
        <p>2</p>
        @break
    @case(3)
        <p>13</p>

        @break
    @default
        что то другое
@endswitch

<p>
    @for($i =1;$i<5;$i++)
        {{$i}}
        @if($i<3)
            ,
        @endif
    @endfor
</p>
<p>
    @foreach([1,2,3,5,8] as $n)
        @if($n == 3)
            @continue
        @endif
        {{$loop->iteration}} - {{$n}}
        @if(!$loop->last)
            ,
        @endif
    @endforeach

    @include('child',['data'=>'Очень важная информация'])
    @includeWhen($c ==2, 'child',['data'=> 'c = 3'])
    @includeUnless($c == 3, 'child',['data'=> 'c <> 4'])
    @each('comment',['коментарий 1','коментарий 2','коментарий 3'], 'comment1')

    <script>
        let x ={{\Illuminate\Support\Js::from([1,2,3])}}
    </script>


</p>
комментарий
<p>ENV: {{env('APP_NAME')}}</p>
{{-- комментарий blade--}}

</body>
</html>

