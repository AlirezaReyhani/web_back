<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        table,
        td {
            border: 2px black solid;
            padding: 5px;
        }

        form {
            border: 2px violet solid;
            border-radius: 15px;
            padding: 10px;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['erorr'])){ ?>
    <script>
        alert("Username or password Not Found! Go register");
    </script>
        <?php
        
    }

    ?>
    <form style="border:5px" action="temp_login.php" method="POST">
        <label for="user_name">user name:</label><br>
        <input type="text" name="user_name" placeholder="user name"></input><br><br>
        <label for="password">password:</label><br>
         <input type="text" name="password" placeholder="password"></input>
        <br>
        <br>
        <input type="submit" name="submit" value="Submit" ></input>
    </form>
    <form action="register.php" method="POST">
        <input type="submit" name="register" value="register"></input>
    </form>
</body>

</html>