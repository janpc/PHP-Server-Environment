<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en"></html>
<head>
    <title>Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<section class='login'>
        <div>
            <?php
            if(isset($_SESSION['email'])){
                echo '<p>You are logged</p>';
            }else{
                echo '<p>You aren\'t logged</p>';
            }
            ?>

            <button onClick="document.location.href='./close_session.php'">Log out</button>
    </div>
</section>
</body>
</html>

