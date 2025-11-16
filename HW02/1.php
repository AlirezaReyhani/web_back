<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>َAReyhani</title>
</head>
<body>
    <?php
    if (isset($_GET['flag'])){
        if($_GET['flag']==1){ ?>
            <script>
                alert("Your message saved in cookie");
            </script>
            <?php   
        }else{?>
            <script>
                alert("failed to save your message in cookie ");
            </script>
            <?php   
        }
    }
    ?>
    <form action="2.php" method="POST">
        <label for="data">Enter your message</label><br>
        <input type="text" id="data" name="data" required  /><br>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>