<?php
try {
    $conn = mysqli_connect("localhost", "root", "", "test");
    echo "connected to DB" . '<br>';
        $sql = "SELECT * FROM users";
     
        $result = mysqli_query($conn, $sql);
} catch (Exception $e) {
        echo $e;
        echo "failed";
    }
?>