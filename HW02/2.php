<?php

if (isset($_POST['data'])) {
    $data = $_POST['data'];
    
    setcookie('message', $data, time() + (24 * 60 * 60), "/");
    
    header("Location:1.php?flag=1 ");
    exit;
}else{
    header("Location:1.php?flag=0 ");
    exit;
}
?>