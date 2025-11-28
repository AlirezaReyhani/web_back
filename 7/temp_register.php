<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td {
            border: 2px black solid;
            padding: 5px;
        }
    </style>

</head>

<body>
    <?php
    include("config_pdo.php");
    echo $_POST['user_name'];
if(!isset($_POST['user_name'])){
    echo "You can't register right now! please contact support";
    header("location:register.php?erorr=1");

}
else{
    $user = $_POST['user_name'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];
    
    
    
    $sql1 = "INSERT INTO `users` (`id`, `user_name`, `password`, `phone`) VALUES (NULL, '$user', '$pass', '$phone')";
    // $result = mysqli_query($conn, $sql1);
    
    
    if ($conn->query($sql))
    {
        echo "Registered successfuly";
        }
    else {
        echo "You can't register right now! please contact support";
        header("location:2.php?erorr=1");
        
        
    }
    
}





    
    ?>
</body>

</html>