
<?php
require_once('template_header.php');
?>


<h1>Accueil</h1>

<?php
require_once('template_menu.php');
renderMenuToHTML('index');
?>
<div>
    <h1>Text Fields</h1>
    <form>
        First name: <input type="text" name="firstname"><br>
        Last name: <input type="text" name="lastname">
    </form>
    <h2>Password</h2>
    <form>
        Password: <input type="password" name="pwd">
    </form>
    <h3>Radio Buttons</h3>
    <form>
        <input type="radio" name="sex" value="male">Male<br>
        <input type="radio" name="sex" value="female">Female
    </form>

    <h4>Checkboxes</h4>
    <form>
        <input type="checkbox" name="vehicle" value="Bike">I have a bike<br>
        <input type="checkbox" name="vehicle" value="Car">I have a car
    </form>

    <h5>Submit Button</h5>
    <form name="input" action="cv.html" method="get">
        Username: <input type="text" name="user">
        <input type="submit" value="Submit">
    </form>
</div>


<?php
require_once('template_footer.php');
?>