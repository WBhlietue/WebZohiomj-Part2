<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        label {
            margin: 10px;

        }

        input {
            margin: 10px;
            margin-bottom: 30px;
            width: 200px;
            height: 20px;
        }

        form {
            margin-top: 20px;
        }

        .btn {
            height: 50px;
            background-color: rgb(255, 223, 164);
            border-color: rgb(255, 175, 27);
        }
    </style>
</head>

<body>
    <?php
    include("./menu.php");
    ?>
    <div class="main">
        <form method="post" action="./user.php">
            <label>Нэр</label>
            <br />
            <input required name="fName" />
            <br />
            <label>Овог</label>
            <br />
            <input required name="lName" />
            <br />
            <label>Цахим шуудан</label>
            <br />
            <input required type="email" name="email" />
            <br />
            <label>Нууц үг</label>
            <br />
            <input type="password" required name="pass" />
            <br />
            <input type="submit" value="Бүртгүүлэх" class="btn" />
        </form>
    </div>
</body>

</html>