<?php

    if (isset($_POST['sent']))
        echo "Gesendet!";

?>
<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>

        <h1>Formularversand mit PHP</h1>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="user">Username:</label>
            <input type="text" value="" name="user" id="user" />
            <label for="pass">Password:</label>
            <input type="password" value="" name="pass" id="pass" />
            <input type="submit" value="Einloggen" name="sent" />
        </form>
    </body>
</html>