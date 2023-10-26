<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Загрузка аудио</title>



</head>

<body>

<form name="addaudio" action="{{url()->current()}}" method="post" enctype="multipart/form-data">
    @csrf
    @if($audio)
        <audio controls>
            <source src="{{$audio}}">
        </audio>

        <br />

    @endif

    @error('audio')
    {{$message}}
    <br />
        @enderror
    <input type="file" name="audio">
    <br />
    <br />
    <input type="submit" value="загрузить" name="submit">

</form>

</body>
</html>
