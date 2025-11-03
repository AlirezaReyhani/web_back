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
        include("config_pdo.php");
        
        $sql = "SELECT * FROM student";
        echo "success" . '<br>';
        $result = $conn->query($sql);
        echo $result->rowCount() . "<br> <h1>ASSOC</h1>";

        echo "<table>";
        while ($r1 = $result->fetch(PDO::FETCH_ASSOC)) {
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
        $result = $conn->query($sql);

        echo "<hr>";

        echo "<hr><h1>row</h1>";
               echo "<table>";
        while ($r1 = $result->fetch(PDO::FETCH_NUM)) {
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

        $result = $conn->query($sql);

              echo "<table>";
        while ($r1 = $result->fetch(PDO::FETCH_BOTH)) {
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


                
    // $result = $conn->query($sql);
    // foreach($result->fetchAll(PDO::FETCH_ASSOC) as $k->$v){

    // }

    ?>
</body>

</html>