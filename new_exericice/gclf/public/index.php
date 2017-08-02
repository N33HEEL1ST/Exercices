<?php

require '../inc/config.php';

// récuperation de la section demandée
// $section = isset( $_GET["section"] ) ? trim( $_GET["section"] ) : "" ;
$section = isset( $_GET["path"] ) ? trim( $_GET["path"] ) : "" ;

// this is called ENG:"routing" en FR:"routage" :
// for catalgue.php
if ( $section == "catalogue" || $section =="catalogue/" ) {
    // inclusion du controller
    require __CONTROLLER_PATH__."catalogue.php";
}
//
// for details.php
else if ( substr($section, 0, 18) == "catalogue/details/" ) {
    $tmp = explode("/", $section) ;
    // print_r($tmp);
    $_GET['id'] = $tmp[2];
    // inclusion du controller
    require __CONTROLLER_PATH__."details.php";
}
//
// for form_categorie.php
else if ( $section == "form-categorie" || $section == "form-categorie/" ) {
    // inclusion du controller
    require __CONTROLLER_PATH__."form_categorie.php";
}
//
// for form_film.php
else if ( $section == "form-film" || $section == "form-film/" ) {
    // inclusion du controller
    require __CONTROLLER_PATH__."form_film.php";
}
//
// if no "?section" than simply display "home"
else if ( empty($section) ){
    // inclusion du controller
    require __CONTROLLER_PATH__."home.php";
}
//
// else page 404
else {
    echo $section;
    // inclusion de 404.php
    require __VIEW_PATH__."404.php";
}
