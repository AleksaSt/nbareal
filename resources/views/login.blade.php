<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/login">
        @csrf
        <label for="email">Email:</label>
        <br><br>
        <input type="text" name="email" id="email">
        <br><br>
        <label for="password">Password:</label>
        <br><br>
        <input type="password" name="password" id="password">
        <br><br>
        <button type="submit">Login</button>
    </form>
    @if(count($errors->all()) > 0)

        @foreach($errors->all() as $error)

            <li>{{$error}}</li>

        @endforeach
    @endif
</body>
</html>