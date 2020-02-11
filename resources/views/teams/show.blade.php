<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>{{$team->name}}</h3>
    @if($team->players)
        @foreach($team->players as $player)
            <li>
               <a href="/players/{{$player->id}}">{{$player->first_name}}
                {{$player->last_name}}
               </a> 
            </li>
        @endforeach
    @endif
        <h3>Comments</h3>
    <form method="POST" action="/add-comment/{{$team->id}}">
        <textarea name="content" id="content" cols="30" rows="10">Comments:</textarea>
        <button type="submit">Add</button>
    </form>

</body>
</html>