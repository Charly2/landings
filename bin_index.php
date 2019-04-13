<?php


include_once 'config.php';
include_once 'funciones_jc.php';



$l = $_GET['l']?$_GET['l']:1;
$componentes = getByLanding($Link,$l);

$info = getInfoLanding($Link,$l);

//print_r($componentes);


if(!$info){
    die("SIN INFO");
}


include_once 'header.php';
include_once 'vis_index.php';
include_once 'fotter.php';

?>