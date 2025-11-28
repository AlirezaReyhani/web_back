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

    $user = $_POST['user_name'];
    $pass = $_POST['password'];


    $stmt = $conn->prepare("SELECT * FROM `users` WHERE `user_name` = ? AND `password` = ?");
    // $stmt->execute(['u' => $user, 'p' => $pass]);



$stmt->bindParam(1, $user);
$stmt->bindParam(2, $pass);    $stmt->execute();
    
    
        if($row=$stmt->fetchAll(PDO::FETCH_ASSOC)){

            echo "You are now logged in";
            foreach($row as $k=>$val){
            foreach($val as $w=>$valres){
                echo "$w=$valres ";
            echo "<br>";

            }
            echo "<br>";
        }
        echo "<br>";
    
        echo "found";

            header("location:login.php?erorr=0");
        } 
        else{
            header("location:login.php?erorr=1");
        }
        
        // exit;
    

    ?>

</body>

</html>