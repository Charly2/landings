<?php


function getByLanding($link,$idl){

    $sql = "SELECT * FROM landing_comp_reg where landing = '$idl' ORDER BY orden" ;
    $result = $link->query($sql);
    $COMP = [];
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $COMP[] = $row;
        }
    } else {
        $COMP = 0;
    }

    return $COMP;
}

function getInfoLanding($link,$idl){

    $sql = "SELECT * FROM landing_reg where id_reg = '$idl'" ;
    $result = $link->query($sql);
    $COMP = [];
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $COMP[] = $row;
        }
    } else {
        $COMP = 0;
    }

    return $COMP[0  ];
}




function updateCom($link,$col,$val,$id){

    $sql = "UPDATE landing_comp_reg set $col = '$val'  where id_reg = '$id'" ;

    $result = $link->query($sql);


    return $result;
}


function updateLan($link,$col,$val,$id){

    $sql = "UPDATE landing_reg set $col = '$val'  where id_reg = '$id'" ;

    $result = $link->query($sql);


    return $result;
}


function newCom($link,$tipo,$orden,$lan){

    $sql = "INSERT INTO landing_comp_reg(landing, orden, tipo) VALUES ('$lan', '$orden', '$tipo') " ;

    $result = $link->query($sql);


    return $result;
}




function printParrafo($c){
?>
    <div class="itemComp" data-orden="<?=$c['orden']?>" data-id_reg="<?=$c['id_reg']?>">
        <div class="card-header headerCom">Componente <?=$c['titulo']?></div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Titulo:</label>
                <input type="text" data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="titulo" autocomplete="off" class="changeval form-control" id="" value="<?=$c['titulo']?>">
            </div>
            <div class="form-group">
                <label for="">Contenido:</label>
                <textarea data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="text1" class="changeval textarea" id="as" ><?=$c['text1']?></textarea>
            </div>
            <button class="btn btn-danger">Eliminar</button>
        </div>

    </div>
<?php
}


function printMaps($c){
?>
    <div class="itemComp" data-orden="<?=$c['orden']?>" data-id_reg="<?=$c['id_reg']?>">
        <div class="card-header headerCom">Componente <?=$c['titulo']?></div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Titulo:</label>
                <input type="text" data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="titulo" autocomplete="off" class="changeval form-control" id="" value="<?=$c['titulo']?>">
            </div>
            <div class="form-group">
                <label for="">Contenido:</label>
                <textarea data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="text1" class="changeval textarea" id="as" ><?=$c['text1']?></textarea>
            </div>
            <button class="btn btn-danger">Eliminar</button>
        </div>

    </div>
<?php
}




function printSlider($c){

?>
    <div class="itemComp" data-orden="<?=$c['orden']?>" data-id_reg="<?=$c['id_reg']?>">
        <div class="card-header headerCom">Componente <?=$c['titulo']?></div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Titulo:</label>
                <input type="text" autocomplete="off" data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="titulo" class="changeval form-control" id="" value="<?=$c['titulo']?>">
            </div>
            <div class="form-group">
                <label for="">Contenido Slider:</label>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" class="itempull " href="#slider1_<?=$c['id_reg']?>">Slider 1</a></li>
                    <li><a data-toggle="tab" class="itempull" href="#slider2_<?=$c['id_reg']?>">Slider 2</a></li>
                    <li><a data-toggle="tab" class="itempull" href="#slider3_<?=$c['id_reg']?>">Slider 3</a></li>
                    <li><a data-toggle="tab" class="itempull" href="#slider4_<?=$c['id_reg']?>">Slider 4</a></li>
                </ul>
                <div class="tab-content">
                    <div id="slider1_<?=$c['id_reg']?>" class="tab-pane slitm fade in ">
                        <div class="">
                            <label for="">Imagen:</label>
                            <input data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="img1" type="text" autocomplete="off" class="changeval form-control" id="" value="<?=$c['img1']?>">
                        </div>
                        <div class="">
                            <label for="">Contenido:</label>
                            <textarea data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="text1" type="text" class="changeval textarea" id="" cols="30" rows="10"><?=$c['text1']?></textarea>
                        </div>
                    </div>
                    <div id="slider2_<?=$c['id_reg']?>" class="tab-pane slitm fade in ">
                        <div class="">
                            <label for="">Imagen:</label>
                            <input data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="img2" type="text" autocomplete="off" class="changeval form-control" id="" value="<?=$c['img2']?>">
                        </div>
                        <div class="">
                            <label for="">Contenido:</label>
                            <textarea data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="text2" name="" class="changeval textarea" id="" cols="30" rows="10"><?=$c['text2']?></textarea>
                        </div>
                    </div>
                    <div id="slider3_<?=$c['id_reg']?>" class="tab-pane slitm fade in ">
                        <div class="">
                            <label for="">Imagen:</label>
                            <input data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="img3" type="text" autocomplete="off" class="changeval form-control" id="" value="<?=$c['img3']?>">
                        </div>
                        <div class="">
                            <label for="">Contenido:</label>
                            <textarea data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="text3" name="" class="changeval textarea" id="" cols="30" rows="10"<?=$c['text3']?>></textarea>
                        </div>
                    </div>
                    <div id="slider4_<?=$c['id_reg']?>" class="tab-pane slitm fade in ">
                        <div class="">
                            <label for="">Imagen:</label>
                            <input data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="img4" type="text" autocomplete="off" class="changeval form-control" id="" value="<?=$c['img4']?>">
                        </div>
                        <div class="">
                            <label for="">Contenido:</label>
                            <textarea data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="text4" name="" class="changeval textarea" id="" cols="30" rows="10"><?=$c['text4']?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-danger">Eliminar</button>
        </div>
    </div>
<?php }


function printColcont($c){

?>
    <div class="itemComp" data-orden="<?=$c['orden']?>" data-id_reg="<?=$c['id_reg']?>">
        <div class="card-header headerCom">Componente <?=$c['titulo']?></div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Titulo:</label>
                <input type="text" autocomplete="off" data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="titulo" class="changeval form-control" id="" value="<?=$c['titulo']?>">
            </div>
            <div class="form-group">
                <label for="">Contenido Slider:</label>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" class="itempull " href="#item1_<?=$c['id_reg']?>">Item 1</a></li>
                    <li><a data-toggle="tab" class="itempull" href="#item2_<?=$c['id_reg']?>">Item 2</a></li>
                    <li><a data-toggle="tab" class="itempull" href="#item3_<?=$c['id_reg']?>">Item 3</a></li>
                    <li><a data-toggle="tab" class="itempull" href="#item4_<?=$c['id_reg']?>">Item 4</a></li>
                </ul>
                <div class="tab-content">
                    <div id="item1_<?=$c['id_reg']?>" class="tab-pane slitm fade in ">
                        <div class="">
                            <label for="">Imagen:</label>
                            <input data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="img1" type="text" autocomplete="off" class="changeval form-control" id="" value="<?=$c['img1']?>">
                        </div>
                        <div class="">
                            <label for="">Contenido:</label>
                            <textarea data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="text1" name="" class="changeval textarea" id="" cols="30" rows="10" ><?=$c['text1']?></textarea>
                        </div>
                    </div>
                    <div id="item2_<?=$c['id_reg']?>" class="tab-pane slitm fade in ">
                        <div class="">
                            <label for="">Imagen:</label>
                            <input data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="img2" type="text" autocomplete="off" class="changeval form-control" id="" value="<?=$c['img2']?>">
                        </div>
                        <div class="">
                            <label for="">Contenido:</label>
                            <textarea data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="text2" name="" class="changeval textarea" id="" cols="30" rows="10" ><?=$c['text2']?></textarea>
                        </div>
                    </div>
                    <div id="item3_<?=$c['id_reg']?>" class="tab-pane slitm fade in ">
                        <div class="">
                            <label for="">Imagen:</label>
                            <input data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="img3" type="text" autocomplete="off" class="changeval form-control" id="" value="<?=$c['img3']?>">
                        </div>
                        <div class="">
                            <label for="">Contenido:</label>
                            <textarea data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="text3" name="" class="changeval textarea" id="" cols="30" rows="10" ><?=$c['text3']?></textarea>
                        </div>
                    </div>
                    <div id="item4_<?=$c['id_reg']?>" class="tab-pane slitm fade in ">
                        <div class="">
                            <label for="">Imagen:</label>
                            <input data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="img4" type="text" autocomplete="off" class="changeval form-control" id="" value="<?=$c['img4']?>">
                        </div>
                        <div class="">
                            <label for="">Contenido:</label>
                            <textarea data-id="<?=$c['id_reg']?>" data-lan="<?=$c['landing']?>" data-col="text4" name="" class="changeval textarea" id="" cols="30" rows="10" ><?=$c['text4']?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-danger">Eliminar</button>
        </div>
    </div>
<?php }




function printParrafoVista($c){
    if($c['titulo']!= "" && $c['text1']!="" ){
?>


    <section id="<?=implode('_',explode(' ',$c['titulo']));?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase"><?=$c['titulo']?></h2>
                </div>
            </div>
            <div class="row text-center">
                <p class="text-muted"><?=$c['text1']?></p>
            </div>
        </div>
    </section>
<?php }}



function printSliderVista($c){

?>


    <section class="background-cover slick" id="<?=implode('_',explode(' ',$c['titulo']));?>">

        <?php for ($i=1;$i<=4;$i++ ){
            if($c['img'.$i]!= "" ){
            ?>
            <div class="slide " style="background-image: url(<?=$c['img'.$i]?>) ">
                <div class="setfex">
                    <div class="conttset">
                        <?=$c['text'.$i]?>
                    </div>
                </div>
            </div>
        <?php }}?>

    </section>

<?php }
function printColcontVista($c){
//print_r($c);
?>


    <section id="<?=implode('_',explode(' ',$c['titulo']));?>">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase"><?=$c['titulo']?></h2>
                </div>
            </div>
            <div class="row text-center psin ">

                <?php for ($i=1;$i<=4;$i++ ){
                    if($c['img'.$i]!= "" && $c['text'.$i]!="" ){
                        ?>

                        <div class="col-md-3">
                            <img src="<?=$c['img'.$i]?>"  class="img-responsive" alt="">
                            <div class="contee">
                                <?=$c['text'.$i]?>
                            </div>
                        </div>
                 <?php }}?>

            </div>
        </div>
    </section>

<?php }



?>