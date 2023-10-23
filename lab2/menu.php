<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .main{
            display: flex;
            width: 100vw;
        }
        .main div{
            flex: 1;
            height: 60px;
            font-size: 30px;
            border: 1px black solid;
            background-color: lightblue;
            cursor: pointer;
            text-align: center;
            transition: all 0.5s;
            display: flex  ;
            justify-content: center;
            align-items: center;

        }
        .main div:hover{
            background-color: blue;
        }

    </style>
</head>

<body>
    <div class="main">
        <div onclick="OnClick('register.php')">Register</div>
        <div onclick="OnClick('user.php')">User</div>
    </div>
    <script>
        function OnClick(url){
            window.location.href = url;
        }
    </script>
</body>

</html>