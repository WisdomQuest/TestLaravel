<!DOCTYPE html>
<html lang=“ru”>
<head>
    <meta charset=“utf-8”>
    <title>Test components</title>
</head>
<body>
<x-my-input input-type="text" value="{{$a}}"/>
{{-- Если компонент находится в дирректории то так: <x-directory.my-input /> --}}
<x-my-input input-type="text" placeholder="default"/>
<x-error-message message='Ошибка'/>
{{--<x-mypageblade input-type="text"/>--}}
<x-errors-messages>
    <x-slot name="header" class="my-class">
        Ошибка
    </x-slot>
    <i>Вот такая ошибочка</i>
</x-errors-messages>
</body>
</html>
