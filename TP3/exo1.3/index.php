<?php
setcookie("usercss", "style1", time() + 3600);
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            $stylesheetname = "'" . $_COOKIE["usercss"] . ".css'";
            echo "<link rel='stylesheet' href=" . $stylesheetname .">";
        ?>
        <title>IDAW</title>
    </head>

    <body>
        <form id="style_form" action="change.php" method="POST">
            <select name="css">
                <option value="style1">style1</option>
                <option value="style2">style2</option>
            </select>
            <input type="submit" value="Appliquer" />
        </form>

    </body>
</html>