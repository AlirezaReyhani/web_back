<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:rgb(<?php echo rand(0,255)?>,<?php echo rand(0,255)?>,<?php echo rand(0,255)?>);">
    <?php 
    echo "host IP is : ",$_SERVER['REMOTE_ADDR'];?>
    <br>
    <?php
    $name="12";
    $name1=12;

    if(is_integer($name))
        echo "this is integer";
    else{
    (integer)$name;
    echo "converted to int";
    }
?>

</body>
</html>
