<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
</head>
<body>
    <form action="validate.php" method="post">
        <label for="email">Email</label>
        <input name="email" type="email"></input>
        <label for="password">Pasword:</label>
        <input type="password" id="pass" name="password" minlength="8" required>
        <input type="submit" />
    </form>

</body>
</html>