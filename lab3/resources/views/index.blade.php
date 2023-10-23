<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {}

        .btn {
            width: 100px;
            height: 25px;
            background: aqua;
            border-radius: 10px;
            border: 1px black solid;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>
                <label>a: </label>
            </td>
            <td>
                <input id="firstNum" type="number" />
            </td>
        </tr>
        <tr>
            <td>
                <label>b: </label>
            </td>
            <td>
                <input id="secondNum" type="number" />
            </td>
        </tr>
    </table>

    <div class="btn" onclick="Click()">Submit</div>
    <script>
        function Click() {
            window.location.href += "lab3/" + document.getElementById("firstNum").value+"/" + document.getElementById("secondNum").value
        }
    </script>
</body>

</html>