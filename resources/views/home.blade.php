<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
        h1{
            color: lime;
            font-weight:bolder;
            font-size:8rem;
        }
        ul{
            list-style:none;
            display:flex;
        }
        li{
            padding:1rem;
            margin: 0 1rem;
            border-bottom:3px solid lime;
            font-size:2.5rem;
        }
        li:hover{
            transform:scale(110%);
            color:lime;
            cursor:pointer;
            transition:all 1s;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            HELLO WORLD!
         </h1>
         <div>
             <ul>
                 <li><a href="{{ route('about') }}">{{$about}}</a></li> 
                 <li>{{$info}}</li>
                 <li>{{$blog}}</li>
                 <li>{{$news}}</li>
             </ul>
         </div>
    </header>
</body>
</html>

