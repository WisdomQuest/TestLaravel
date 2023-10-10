<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            display: flex;
            justify-content: space-between;
            margin: auto;
            max-width: 600px;
            border-radius: 5px;
            border: 2px solid #e6e6e6;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
        }

        table {
            border-collapse: collapse;
            width: 60%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .cart {
            border: 2px solid #e6e6e6;
            width: 200px;
            padding: 16px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>

{{--{{\Illuminate\Support\Js::from($client)}}--}}


<div class="container">
    @section('$client')
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
    @show

    @section('basket')
        <div class="cart">количество товаров в корзине: <h4> {{$numberProduct}}  </h4><br/> общая сумма <br/>
            <h4> {{$totalSum}} @currency(usd) </h4></div>
    @show


</div>
{{--<x-form name="Ivan" email = 'fff@mail'/>--}}
<x-form />
</body>
</html>




