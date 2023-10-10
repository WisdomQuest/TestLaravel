<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
    <style>
        body {
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            border: 1px solid #000;
            padding: 2rem;
            width: 20%;
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            background-color: #fff;
        }
        label, input {
            /*margin-bottom: 1rem;*/
            font-size: 1em;
        }
        button {
            cursor: pointer;
            background-color: #007bFF;
            color: #fff;
            padding: 0.5rem;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>


<form action="/mypageblade/contacts" method="get">
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name"><br>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email"><br>
    <button type="submit">Отправить</button>
</form>
</body>
</html>

