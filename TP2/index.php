<?php
    require_once("template_header.php");
    require_once("template_menu.php");
    $currentPageId = 'accueil';
    $currentlangage = 'fr';
    if(isset($_GET['page'])) {

        $currentPageId = $_GET['page'];
    }

    if(isset($_GET['lang'])) {

        $currentlangage = $_GET['lang'];
    }
?>

<header class="bandeau_haut">

    <h1 class="titre">IDAW</h1>
</header>

<?php
    renderMenuToHTML($currentPageId,$currentlangage);
?>

<section class="corps">

    <?php
        $pageToInclude = $currentlangage ."/". $currentPageId .".php";
        if(is_readable($pageToInclude))
            require_once($pageToInclude);
        else{}
        //     require_once("error.php");
    ?>
</section>
<?php
require_once("template_footer.php");
?>