<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <style>
        body {
            background-color: #b1dfbb;
            font-family: Arial, sans-serif;
            /*color: #b1dfbb;*/
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            width: 100%;
            border-radius: 5px;
            padding: 20px;
            background-color: #F5F5F5;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.15);
        }
        input {
            padding: 10px;
            margin-bottom: 10px;
            font-size: 1em;
            border-radius: 3px;
            border: 1px solid #ddd;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 3px;
            font-size: 1em;
        }
        button:hover {
            background-color: #45a049;
        }
        /*.slott {*/
        /*   background-color: #4bb1b1;*/
        /*    color: #4bb1b1;*/
        /*}*/

    </style>
</head>
<body>
<x-form>

    <div style="color: green">
        <x-slot name="messageForm">
            После заполнения формы мы с Вами свяжемся в течение 24 часов
        </x-slot>
    </div>
</x-form>
</body>
</html>

