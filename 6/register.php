<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
    if (isset($_GET['erorr'])){ ?>
    <script>
        alert("You must  enter all inputs");
    </script>
        <?php
        
    }

    ?>
    <form style="border:5px" action="temp_register.php" method="POST">
        <label for="user_name">user name:</label><br>
        <input type="text" name="user_name" placeholder="user name"></input><br><br>
        <label for="password">password:</label><br>
         <input type="text" name="password" placeholder="password"></input><br><br>
         <label for="phone">phone:</label><br>
         <input type="text" name="phone" placeholder="phone"></input>
        <br>
        <br>
        <input type="submit" name="submit" value="Submit" ></input>


    </form>
</body>
</html>