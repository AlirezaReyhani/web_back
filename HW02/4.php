<?php

if (isset($_POST['data']) ) {
    $data = (int)$_POST['data'];
    if ( $data < 1) 
        header("Location:3.php?error=0 ");
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $data; $i++) {

        echo "{$i} line of fibo is : {$a} * {$b} = " . ($a * $b) . "<br />";
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }

} else {
    header("Location:3.php?error=0 ");
    exit;
}
?>