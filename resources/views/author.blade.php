<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Авторы</title>



</head>

<body>

{{--    <table>
        <tr>
            <th>ID</th>
            <th> опыт работы</th>
            <th>телефон</th>

        </tr>
        @foreach($authors as $author)
            <tr>
                <td>{{$author->id}}</td>
                <td>  {{$author->work_experience}}</td>
                <td> {{$author->phone->phone}}</td>


            </tr>
        @endforeach
    </table>--}}


@foreach($authors as $author)
    {{$author->id}}:
    @foreach($author->skills as $skill)
        <br />
          {{$skill->skill}}



    @endforeach

    <hr />
@endforeach



</body>
</html>
