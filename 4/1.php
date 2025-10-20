<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td{
            border: 2px black solid;
            padding: 5px;
        }
    </style>
</head>

<body>
    <?php
    try {
        $conn = mysqli_connect("localhost", "root", "", "test");
        $sql = "SELECT * FROM student";
        echo "success" . '<br>';
        $result = mysqli_query($conn, $sql);
        echo mysqli_num_rows($result) . "<br> <h1>ASSOC</h1>";

        echo "<table>";
        while ($r1 = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($r1 as $key => $value) {
                if($key=="id"){
                    if($value%2==0){
                        $color="green";
                    }else
                    $color="red";
                }
                echo "<td style='background-color:".$color."'>" . $key . "</td><td style='background-color:".$color."'>" . $value . "</td>";
        
            }
            echo "</tr>";
        }
        echo "</table>";
        $result = mysqli_query($conn, $sql);

        echo "<hr>";

        echo "<hr><h1>row</h1>";
               echo "<table>";
        while ($r1 = mysqli_fetch_row($result)) {
            echo "<tr>";
            foreach ($r1 as $key => $value) {
                if($key=="0"){
                    if($value%2==0){
                        $color="cyan";
                    }else
                    $color="orangered";
                }
                echo "<td style='background-color:".$color."'>" . $key . "</td><td style='background-color:".$color."'>" . $value . "</td>";
        
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<hr>";

        echo "<hr><h1>array</h1>";

        $result = mysqli_query($conn, $sql);

              echo "<table>";
        while ($r1 = mysqli_fetch_array($result)) {
            echo "<tr>";
            foreach ($r1 as $key => $value) {
                if($key=="id"||$key==0){
                    if($value%2==0){
                        $color="cyan";
                    }else
                    $color="red";
                }
                echo "<td style='background-color:".$color."'>" . $key . "</td><td style='background-color:".$color."'>" . $value . "</td>";
        
            }
            echo "</tr>";
        }
        echo "</table>";
    } catch (Exception $e) {
        echo $e;
        echo "failed";
    }
    ?>
</body>

</html>