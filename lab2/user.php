<?php
session_start();
include("./menu.php");
if (isset($_POST["fName"]))
{
    $data = isset($_SESSION["data"]) ? $_SESSION["data"] : [];
    $data[] = [
        $_POST["fName"],
        $_POST["lName"],
        $_POST["email"],
        $_POST["pass"]
    ];
    $_SESSION["data"] = $data;
}
if (isset($_POST["gg"]))
    unset($_SESSION["data"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main table {
            margin-top: 50px;
            font-size: 25px;
            font-family: "Arial";
        }
        .gg{
            background-color: blue;
            color: white;
            width: 100px;
            height: 30px;
            border-radius: 10px;
            font-size: 20px;
            position: absolute;
            margin-top: 100px;
            left: 50%;
            transform: translateX(-50%);
        }

    </style>
</head>

<body>

    <div class="main">
        <table border="1">
            <tr>
                <th>Нэр</th>
                <th>Овог</th>
                <th>Цахим шуудан</th>
                <th>Нууц үг</th>
            </tr>
            <?php
            $data = isset($_SESSION["data"]) ? $_SESSION["data"] : [];
            foreach ($data as $item)
            {
                echo "<tr>";
                foreach ($item as $value)
                {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <form action="./user.php" method="post">
        <input name="gg" hidden value="1">
        <input class="gg" type="submit" value="clear">
    </form>
</body>

</html>