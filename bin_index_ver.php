<?php


include_once 'config.php';
include_once 'funciones_jc.php';

$l = $_GET['l']?$_GET['l']:1;
$componentes = getByLanding($Link,$l);

$info = getInfoLanding($Link,$l);



if(!$info){
    die("SIN INFO");
}

//print_r($info);






include_once 'vis_index_ver.php';


?>