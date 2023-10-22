<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Form</title>


</head>

<body>
@if($errors->any())
    Ошибка!!!
{{--    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach--}}
@endif


<h2>Заполните форму</h2>
<form name="myform" action="comments/send" method="post">
    {{--    @method('PUT')
        @method('PATCH')                 указывать метод отлины от гет или пост
        @method('DELETE')--}}
    @csrf
    <label for="name">Ваше имя</label>
    <input type="text" name="name" id="name" value="{{old('name')}}"/>
@error('name')
    {{$message}}
    @enderror
    <br />
    <label for="email">email:</label>
    <input type="email" name="email" id="email" value="{{old('email')}}">
    @error('email')
  <div style="color: #AA3333">  {{$message}}</div>
    @enderror
    <br />
    <label for="text">введите текст: </label>
    <input type="text" name="text" id="text" value="{{old('text')}}">
    @error('text')
    {{$message}}
    @enderror
    <br/>
    <input type="submit" value="отправить">

    <div>
{{old('text')}}
    </div>
</form>

</body>
</html>


