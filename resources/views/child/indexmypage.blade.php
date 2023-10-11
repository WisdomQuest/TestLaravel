<x-my-client>
    <x-slot name='title'>1</x-slot>

    <x-slot name='client'>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>

            @foreach($client as $item)
                <tr>
                    <td>{{$item->getId()}}</td>
                    <td>{{$item->getName()}}</td>
                    <td>{{$item->getEmail()}}</td>

                </tr>
            @endforeach
        </table>
    </x-slot>

    <x-slot name='basket'>
        <div class="cart">количество товаров в корзине: <h4> {{$numberProduct}}  </h4><br/> общая сумма <br/>
            <h4> {{$totalSum}} @currency(usd) </h4>
        </div>
    </x-slot>

    <x-slot name='message'>
        <div class="form">
            <x-slot name="messageForm">
                После заполнения формы мы с Вами свяжемся в течение 24 часов
            </x-slot>
        </div>
    </x-slot>

</x-my-client>
