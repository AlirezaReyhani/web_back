<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table { border-collapse: collapse;  direction: rtl; }
        td { width: 200px; height: 200px; border: 10px solid #000; text-align: center; }
        img { object-fit: fill ; }
    </style>
</head>
<body>

<?php
$images = ['images/1.png','images/2.png','images/3.png','images/4.png','images/5.png','images/6.png','images/7.png','images/8.png',
'images/9.png'];
shuffle($images);
?>

<table>
    <?php
    $counter = 0;
    foreach ($images as $image):
        if ($counter % 3 == 0) echo '<tr>'; ?>
        <td> <img src="<?= $image ?>" > </td>
    <?php 
    $counter++;
        if ($counter % 3 == 0) echo '</tr>';
    endforeach;
    if ($counter % 3 != 0) echo '</tr>'; ?>
</table>
<br><br><br><br>
<img src="images/10.jfif" alt="" style="with:100px;hight: 100px;">

</body>
</html>