<?php
try {
    $conn = mysqli_connect("localhost", "root", "", "test");
    echo "success" . '<br>';
        $sql = "SELECT * FROM student";
     $sql2 = "SELECT * FROM student WHERE `Fname` = 'sadjad'";
        $result = mysqli_query($conn, $sql2);
} catch (Exception $e) {
        echo $e;
        echo "failed";
    }
?>