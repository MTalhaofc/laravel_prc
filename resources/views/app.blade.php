<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice Project</title>
</head>
<body>
    
<header>
   <a href="{{route('read')}}">  <button> Read</button> </a>

    <a href="{{route('move')}}"> <button> Move</button></a>
    
</header>

@yield('content')


<footer> <div>
<p>Practice Project</p>    
</div></footer>
</body>
<style>
    footer{
        background-color: black;
    
    }
    div{
        color: white;
    }
</style>
</html>