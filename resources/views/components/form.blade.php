<div>
    <form action="/mypageblade" method="get">
        <label for="name" >Имя:</label>
        <input type="text" id="name" name="name" value="{{$name}}"><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="{{$email}}"><br>
        <button type="submit">Отправить</button>
    </form>
</div>


{{--<input class="input-text" type="text" value="{{$name}}"  />--}}
