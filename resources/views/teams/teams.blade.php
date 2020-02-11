<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Teams:</h3>
    @foreach($teams as $team)
    
        <a href="/teams/{{$team->id}}"> <li>{{$team->name}}</li></a>

    @endforeach
</body>
</html>
