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

    </x-slot>
{{--    <x-slot name='$messageForm'>4</x-slot>--}}
    <div class="form">
        <x-slot name="message">
            После заполнения формы мы с Вами свяжемся в течение 24 часов
        </x-slot>
    </div>

</x-my-client>

