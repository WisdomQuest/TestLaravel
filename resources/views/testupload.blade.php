<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Загрузка изображения</title>



</head>

<body>

@if($image)
    <h2>Изображение</h2>
    <p>
        <img src="{{$image}}" alt="">
    </p>
@endif


   {{--поллучение текущего url: url()->current()--}}
<form name="myform" action="{{url()->current()}}" method="post" enctype="multipart/form-data">
    @csrf
    @error('image')
    <span>{{$message}}</span>
    <br />
    @enderror
    <input type="file" name="image" />
    <br />
    <input type="submit" name="submit" value="отправить" />

</form>

</body>
</html>

