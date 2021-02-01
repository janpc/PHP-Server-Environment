<?php
    $error=0;
    if(isset($_GET['error'])){
        $error=$_GET['error'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section class='loggin'>
        <div>
            <form action="validate.php" method="post">
                <label for="email">Email:</label>
                <input name="email" type="email" ></input>
                <?php
                    if($error==1){
                        echo '<span>Wrong Email.</span>';
                    }
                ?>
                <label for="password">Pasword:</label>
                <input type="password" id="pass" name="password" minlength="8" required>
                <?php
                    if($error==2){
                        echo '<span>Wrong Password.</span>';
                    }
                ?>
                <input type="submit" />
            </form>
        </div>
    </secton>

</body>
</html>