<?php

require '../inc/config.php';

// récuperation de la section demandée
$section = isset( $_GET["section"] ) ? trim( $_GET["section"] ) : "" ;

if ( $section == "catalogue" ) {
    // inclusion du controller
    require __CONTROLLER_PATH__."catalogue.php";
}
else if ( empty($section) ){
    // inclusion de la home
    require __CONTROLLER_PATH__."home.php";
}
