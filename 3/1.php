<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>??</title>
</head>
<body>
    <?php
    $color=["red","green","blue","orange","cyan"];
    shuffle($color);
    foreach($color as $s){
        ?>
        <span style="color:<?= $s;?>;">php</span><br>
        <?php
    }
    ?><br><br><br>
    <hr>
    <?php
    $a=array(
        "a"=>5,
        "b"=>7,"c"=>3,"d"=>2,"e"=>8,"f"=>5,"g"=>4,"h"=>2);
    echo "asort <br>";
    asort($a);
    foreach($a as $key=>$val){
        echo $key,"=>",$val,"<br>";
    }
    ?>
    <hr>
    <?php
    echo "SORT <br>";
    sort($a);
    foreach($a as $key=>$val){
        echo $key,"=>",$val,"<br>";
    }
    ?>
    <hr>
    <?php
    echo "uniq <br>";
    $b=array_unique($a);
    foreach($b as $key=>$val){
        echo $key,"=>",$val,"<br>";
    }
    ?>
    <hr>
    <?php
    $title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>";
    $p="Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ipsum voluptate quibusdam natus in suscipit, vel consectetur eaque voluptatibus molestiae dolorum officiis? Officiis ex odit, minima numquam eius exercitationem quisquam.
    Sed repellat debitis magnam cumque nulla quo similique amet eos delectus, eius corrupti, quibusdam, pariatur reiciendis distinctio porro modi quaerat ipsam dicta aliquam blanditiis quam facere itaque repudiandae? Nobis, provident.
    Consectetur vel vero, corrupti amet aut in. Et nisi vero rerum aliquid, eveniet magnam excepturi illo? Officia fugiat distinctio nesciunt ea, itaque ipsa, voluptates possimus veniam rem molestiae, dolores cumque?<br>";

    $p2="Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ipsum voluptate quibusdam natus in suscipit, vel consectetur eaque voluptatibus molestiae dolorum officiis? Officiis ex odit, minima numquam eius exercitationem quisquam.
    Sed repellat debitis magnam cumque nulla quo similique amet eos delectus, eius corrupti, quibusdam, pariatur reiciendis distinctio porro modi quaerat ipsam dicta aliquam blanditiis quam facere itaque repudiandae? Nobis, provident.
    Consectetur vel vero, corrupti amet aut in. Et nisi vero rerum aliquid, eveniet magnam excepturi illo? Officia fugiat distinctio nesciunt ea, itaque ipsa, voluptates possimus veniam rem molestiae, dolores cumque?<br>";
    echo "Title: <br>",ucwords($title);
    echo "paragraph 1: <br>",ucfirst($p);
    echo "paragraph 2: <br>",substr($p2,0,50), "<a href=''>...</a>";
    ?>
 


</body>
</html>