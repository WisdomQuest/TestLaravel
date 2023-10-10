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
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
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
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
<?php //= var_dump($client) ?>
<div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php
        foreach ($client as $item) {
            echo '<tr>';
            echo '<td>' . $item->getId() . '</td>';
            echo '<td>' . $item->getName() . '</td>';
            echo '<td>' . $item->getEmail() . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <div class="cart">количество товаров в корзине: <h4><?= $numberProduct ?> </h4><br/> общая сумма <br/>
        <h4> <?= $totalSum ?></h4></div>
</div>
</body>
</html>
