<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: #F0FFF0; /* Honeydew color for light feel */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif; /* Simple and clean typeface */
        }
        form {
            border: none;
            padding: 2rem;
            width: 60%; /* Adjust the form width */
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            background-color: #fff;
            border-radius: 15px; /* Rounded corners for softer look */
        }
        label, input {
            margin-bottom: 1rem;
            font-size: 1em;
        }
        button {
            cursor: pointer;
            background-color: #668cff; /* Light blue button */
            color: #fff;
            padding: 0.5rem;
            border: none;
            border-radius: 5px; /* Rounded corners for button */
            transition: all 0.3s ease; /* Animation on hover */
        }
        button:hover {
            background-color: #4d79ff; /* Different color when mouss-hover */
        }
    </style>
</head>
<body>

{{--{{\Illuminate\Support\Js::from($client)}}--}}

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

<x-form>
</x-form>

</body>
</html>




