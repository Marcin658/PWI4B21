<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <!--
    <?php
        echo "Hello World";
    ?>
    !-->
    
    <?php
    // include('./elements/navbar.php');
    include_once('./elements/navbar.php');
    ?>
    <main>
        <h1>Homepage<h2>
    </main>
    <?php
    // require('./elements/footer.php');
    require_once('./elements/footer.php')
    ?>
</body>
</html>