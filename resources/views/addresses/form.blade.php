<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@if($action == 'create')
            Добавить
        @else
            Изменить
        @endif адрес</title>
</head>
<body>


<h2>@if($action == 'create')
        Добавить
    @else
        Изменить
    @endif адрес</h2>


<form
    action="@if($action == 'create'){{route('addresses.store')}}@else{{route('addresses.update', ['address'=>$address])}}@endif "
    name="address" method="post">
    @csrf
    @if($action ==' edit')
        @method('PUT')
    @endif
    <label for="address">адрес</label>
    <input type="text" name="address" id="address"
           value="@if($action == 'create'){{old('$address')}}@else{{$address->address}}@endif">
    @error('address')
    {{$message}}
    @enderror
    <br/>
    <br/>
    <input type="submit" value="@if($action == 'create')Добавить @elseИзменить@endif">
</form>
</body>
</html>

