{{--@foreach($users as $user)--}}
{{--    {{$user}}--}}
{{--@endforeach--}}

{{--{{var_dump($users)}}--}}

<h2>Users</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>email_verified</th>
        <th>password</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>  {{$user->name}}</td>
            <td> {{$user->email}}</td>
            <td> {{$user->email_verified_at}}</td>
            <td>  {{$user->password}}</td>
            <td><a href="/testdatabase/{{'users'}}/{{$user->id}}/delete">удалить</a></td>
        </tr>
    @endforeach
</table>

<h2>News</h2>

<a href="/testdatabase/news/add/"><b>добавить новость</b></a>

<table>
    <tr>
        <th>ID</th>
        <th>author_id</th>
        <th>title</th>
        <th>text</th>
        <th>created_at</th>
    </tr>
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

<h2>authors</h2>

<table>
    <tr>
        <th>ID</th>
        <th>user_id</th>
        <th>work_experience</th>
        <th>created_at</th>
    </tr>

    @foreach($authors as $author)
        <tr>
            <td>{{$author->id}} </td>
            <td>  {{$author->user_id}}</td>
            <td> {{$author->work_experience}}</td>
            <td>  {{$author->created_at}}</td>
            <td><a href="/testdatabase/{{'authors'}}/{{$author->id}}/delete">удалить</a></td>
        </tr>
    @endforeach
</table>

<h2>comments</h2>

<table>
    <tr>
        <th>ID</th>
        <th>post_id</th>
        <th>name</th>
        <th>text</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    @foreach($comments as $comment)
        <tr>
            <td>{{$comment->id}}</td>
            <td>{{$comment->post_id}}</td>
            <td>  {{$comment->name}}</td>
            <td> {{$comment->text}}</td>
            <td>  {{$comment->created_at}}</td>
            <td>  {{$comment->updated_at}}</td>
            <td><a href="/testdatabase/{{'comments'}}/{{$comment->id}}/delete">удалить</a></td>
        </tr>
    @endforeach
</table>
