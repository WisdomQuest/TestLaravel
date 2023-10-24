<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@if($action == 'create')
            Создать
        @else
            Изменить
        @endif</title>
</head>
<body>

{{--@foreach($errors->all() as $error)
    {{$error}}
    @endforeach--}}

<form action="@if($action == 'create'){{route('news.store')}}@else{{route('news.update',['news'=> $news])}} @endif" name="news" method="post">
    @csrf
    @if($action == 'edit')
        @method('PATCH')
    @endif
    <label for="title">заголовок</label>
    <input type="text" name="title" id="title" value="@if($action == 'create'){{old('title')}}@else{{$news->title}}@endif">
    @error('title')
    {{$message}}
    @enderror
    <br>
    <br>
    <label for="text">Текст новостей</label>
    <input type="text" name="text" id="text" value="@if($action == 'create'){{old('text')}}@else{{$news->text}}@endif">
    @error('text')
    {{$message}}
    @enderror
    <br>
    <br>
    <input type="submit" value="@if($action == 'create')Добавить@elseИзменить@endif">

</form>


</body>
</html>
