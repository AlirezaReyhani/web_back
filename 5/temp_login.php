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
    include("config.php");


    $user = $_POST['user_name'];
    $pass = $_POST['password'];

    //$sql1 = "INSERT INTO `student` (`id`, `Fname`, `Lname`, `grade`) VALUES (".rand(10,1000).", '$user', '$pass', '15');";
    echo $user, "<br>";
    echo $pass, "<br>";
    $sql1 = "SELECT * FROM student WHERE `Fname` = '$user' AND `Lname`='$pass'";
    $result = mysqli_query($conn, $sql1);

    echo mysqli_num_rows($result) . "<br> <h1>ASSOC</h1>";
    if (mysqli_num_rows($result) == 0)
    {
        echo "Nothing Found";
        header("location:2.php",true,303);
        }
    else {
        
        
        
        echo "<table>";
        

        while ($r1 = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($r1 as $key => $value) {
                if ($key == "id") {
                    if ($value % 2 == 0) {
                        $color = "green";
                    } else
                        $color = "red";
                }
                echo "<td style='background-color:" . $color . "'>" . $key . "</td><td style='background-color:" . $color . "'>" . $value . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }






    
    ?>
</body>

</html>