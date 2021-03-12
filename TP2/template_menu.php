<?php
function renderMenuToHTML($currentPageId) {
    // un tableau qui definit la structure du site
    $mymenu = array(
        // idPage titre
        //'index' => array('Index'),
        'accueil' => array('Accueil'),
        'cv' => array('Cv'),
        'projets' => array('Mes Projets'),
        'contact' => array('Contact'),
    );
    echo "<ul>";
    foreach($mymenu as $pageId => $pageParameters) {
        if ($pageId == $currentPageId) {
            echo "<li><a id='currentpage' href='http://localhost/TP2/index.php?page=" . $pageId . "'>" . $pageParameters[0] . "</a></li>";
        } else {
            echo "<li><a href='http://localhost/TP2/index.php?page=" . $pageId . "'>" . $pageParameters[0] . "</a></li>";
           // echo "<li><a href ='$pageId.php'><span>$pageParameters[0]</span></a></li>";
        }
    }
    echo "</ul>";
}
?>