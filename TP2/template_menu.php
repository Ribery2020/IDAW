<?php
    function renderMenuToHTML($currentPageId) {
    // un tableau qui d\'efinit la structure du site
        $mymenu = array(
            // idPage titre
            'index' => array( 'Accueil' ),
            'cv' => array( 'Cv' ),
            'projets' => array('Mes Projets')
         );
         // ...
        foreach($mymenu as $pageId => $pageParameters) {
            if($pageId == $currentPageId){
                echo "<a href = $pageId.php>currentPage</a>";
                echo "<br>";
            }else{
                echo "<a href = $pageId.php>$pageParameters[0]</a>";
                echo "<br>";
            }

        }
        // ...
    }
?>