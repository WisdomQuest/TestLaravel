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
        a {
            color: #af8503;  /* sets color of links */
            text-decoration: none;  /* removes underline */
        }
        a:hover {
            color: #4d79ff;  /* changes color of links when hovered over */
        }
        .abba{
            color: #AA3333;  /* sets color of links */
            text-decoration: none;  /* removes underline */
        }
    </style>

</head>

<body>
<div>


    @foreach($news as $new)

        <li>
            @php echo $new->Type  @endphp
            <a href="{{route('news.show',['news'=>$new])}}"> {{$new->author_id}} -- <b>{{$new->title}} </b>--- {{$new->text}} </a>
        </li>
    @endforeach
</div>
<a href="/news?page={{$page}}&sortUp" class="abba">по возрастанию</a>

<a href="/news?page={{$page}}&sortDown" class="abba">по убыванию</a>
<div>

    {{$sort->links('mypagination')}}

</div>

</body>
</html>

