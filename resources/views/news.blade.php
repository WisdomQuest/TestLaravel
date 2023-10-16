<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Новости</title>

    <style>
        table {
            background-color: #b1dfbb;
            border-radius: 3px;
            border-color: #f5c6cb;
        }
    </style>
</head>

<body>
<div>
    <table>
        <tr>
            <th>ID</th>
            <th>author_id</th>
            <th>title</th>
            <th>text</th>
            <th>created_at</th>
        </tr>

        @if(isset($_GET['sortUp']))
            @php $news = $sortUp; @endphp
        @endif
           @if(isset($_GET['sortDown']))
            @php $news = $sortDown; @endphp
        @endif


        @foreach($news as $new)
            <tr>
                <td>{{$new->id}}</td>
                <td>  {{$new->author_id}}</td>
                <td> {{$new->title}}</td>
                <td> {{$new->text}}</td>
                <td>  {{$new->created_at}}</td>
                <td><a href="/testdatabase/{{'news'}}/{{$new->id}}/delete">удалить</a></td>
            </tr>
        @endforeach
    </table>
    <a href="/news?sortUp">по возрастанию</a>
    <a href="/news?sortDown">по убыванию</a>
</div>

</body>
</html>
