<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
</head>
<body>
    <?php
    if(isset($_SESSION['email'])){
        echo 'Logged';
    }else{
        echo 'Not Logged';
    }
    ?>

    <button onClick="document.location.href='./close_session.php'">Logg out</button>
</body>
</html>

