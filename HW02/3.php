<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>َAReyhani</title>
</head>

<body>
    <?php
    if (isset($_GET['error'])) { ?>
        <script>
            alert("Enter a valid Data |: ");
        </script>
    <?php
    }
    ?>
    <form action="4.php" method="POST">
        <label for="data">Enter a number</label><br>
        <input type="text" id="data" name="data" required /><br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>