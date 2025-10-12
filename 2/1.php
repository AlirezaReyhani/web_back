<html lang="en">
    <head>
<title>Document</title>
</head>
<body>
<?php
$arr1=[1,2,3,4];
$arr2=[2,5,7,8]; 
$arr3=[];



for($i=0;$i<4;$i++){
    $arr3[$i]=$arr2[$i]+$arr1[$i];
}
for($i=0;$i<4;$i++){
    echo $arr3[$i], "<br>"; 
}



foreach($arr1 as $key => $value){
    $arr[$key]=$value+$arr2[$key];
    echo $arr3[$key], "<br>";
}
?>
<table style="border:10px solid black;">
    <?php

    for($i=1;$i<=10;$i++){
            ?>
            <tr style=<?php if($i%2==0)echo' "background-color: red"'; else echo" 'background-color: lightblue'"?>>
            <?php
            for($j=1;$j<=10;$j++) {
                ?> 
                <td style=<?php if($i==$j)echo' "background-color:green;"'?>><?php echo $i," * ",$j," = ",$i*$j?></td>
                <?php
            }
        echo "</tr>";
    }
?>
</table>

<?php
$arrrand=["sajjad","all","reza","judo"] ;
shuffle($arrrand);
print_r($arrrand);
?>
<br>
<br>
<br>
<br>
<br>
<?php
$arrs=["sajjad", "all","reza", "judo"];
for($i=0;$i<=rand (5,108860000);$i++){
    $x=rand(0,3);
    $r=rand(0,3);
    $temp=$arrs[$x];
    $arrs[$x]=$arrs[$r];
    $arrs[$r]=$temp;
}
print_r($arrs);
?>