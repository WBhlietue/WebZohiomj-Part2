<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $numbers=array("a4","a6","a2","a22","a11"); rsort($numbers);
    foreach($numbers as $a){
        echo $a;
    } 
    ?>
</body>
</html>