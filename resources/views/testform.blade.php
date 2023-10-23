<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Form</title>



</head>

<body>
@if($errors->any())
    <h3>Ошибки при заполнении формы</h3>
    <div>
        @foreach($errors->all() as $message)
            <span>{{$message}}</span>
            <br />
        @endforeach
    </div>
@endif
<h2>Заполните форму</h2>
{{--<form name="myform" action="testform/send" method="post">--}}
<form name="myform" action="testform/sendbyrequest" method="post">
{{--    @method('PUT')
    @method('PATCH')                 указывать метод отлины от гет или пост
    @method('DELETE')--}}

    @csrf

    <label for="name">Ваше имя:</label>
    <input type="text" name="name" id="name" value="{{old('name')}}"/>
    @error('name')
    <div> {{$message}}</div>
    @enderror
    <br />
    <label for="text">Ваше сообщение:</label>
    @error('text')
    <div style="color: #AA3333"> {{$message}}</div>
    @enderror
    <br />
    <textarea name="text" id="text" cols="30" rows="10">{{old('text')}}</textarea>
    <br />
    <label for="bd">Ваша дата рождения</label>
    <input type="date" name="bd" id="bd" value="{{old('bd')}}"/>

    @error('bd')
    <div style="color: #AA3333"> {{$message}}</div>
    @enderror
    <input type="hidden" name="test" value="Test" />
    <input type="submit" value="отправить">
</form>

</body>
</html>

