<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/register">
        @csrf
        <label for="name">Name:</label>
        <br><br>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="email">Email:</label>
        <br><br>
        <input type="text" name="email" id="email">
        <br><br>
        <label for="password">Password:</label>
        <br><br>
        <input type="password" name="password" id="password">
        <br><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>