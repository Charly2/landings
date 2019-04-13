<?php

include_once 'config.php';
include_once 'funciones_jc.php';


if ($_GET['ACT']=="UPDATE"){

    $r =  updateCom($Link,$_GET['col'],$_GET['text'],$_GET['id']);
    print_r($r);
    exit(1);
}
if ($_GET['ACT']=="NEW"){


    $r = newCom($Link,$_GET['tipo'],$_GET['orden'],$_GET['landing']);

    print_r($r);
    exit(1);
}

if ($_GET['ACT']=="UPDATELAN"){


    $r =  updateLan($Link,$_GET['row'],$_GET['text'],$_GET['id']);


    print_r($r);
    exit(1);
}






