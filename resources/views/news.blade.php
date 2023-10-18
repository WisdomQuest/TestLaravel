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
        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 1rem;
        }
        nav a, nav span {
            margin: 0 1rem;
            padding: 1rem;
            text-decoration: none;
            color: #007bFF;
            border: 1px solid #7abaff;
            border-radius: 5px;
            transition: 0.5s all ease;
        }
        nav span {
            color: #721c24;
            border-color: #721c24;
        }
        nav a:hover {
            background-color: #007bFF;
            color: #fff;
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

{{--        @if(isset($_GET['sortUp']))
            @php $news = $sortUp; @endphp
        @endif
           @if(isset($_GET['sortDown']))
            @php $news = $sortDown; @endphp
        @endif--}}

{{--    @if(isset($_GET['sortUp']))--}}
{{--            @php $news = $sortUp; @endphp--}}
{{--        @endif--}}
{{--           @if(isset($_GET['sortDown']))--}}
{{--            @php $news = $sortDown; @endphp--}}
{{--        @endif--}}




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
<div>
        {{$news->links('mypagination')}}
</div>

</body>
</html>
