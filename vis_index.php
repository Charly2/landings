

<div class="container " style="padding-top: 70px;">
    <h1>Landings</h1>
    <section class="noPadding">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Titulo:</label>
                    <input type="text" data-id="<?=$info['id_reg']?>"  data-col="titulo" autocomplete="off" class="changevallan form-control" id="" value="<?=$info['titulo']?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Imagen portada:</label>
                    <input type="text" data-id="<?=$info['id_reg']?>"  data-col="img" autocomplete="off" class="changevallan form-control" id="" value="<?=$info['img']?>">
                </div>
            </div>

        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-6 text-left">
                <button class="btn btn-success nuevoCOM" data-toggle="modal" data-target="#myModal">Nuevo componente</button>
            </div>
            <div class="col-md-6 text-right">
                <button class="btn btn-info ordenarBTN">Ordenar</button>
            </div>
        </div>

    </section>
    <div class="contenidoComp" style="margin-bottom: 90px">

        <?php
        if ($componentes){
            foreach ($componentes as $com){
                switch ($com['tipo']){
                    case 1:
                        printParrafo($com);
                        break;
                    case 2:
                        printSlider($com);
                        break;
                    case 3:
                        printColcont($com);
                        break;
                    case 4:
                        printMaps($com);
                        break;
                }
            }
        }
        ?>
    </div>

</div>

</div>


<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Nuevo componente</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Titulo:</label>
                    <select name="" id="tiponew">
                        <option value="1">Parrafo</option>
                        <option value="2">Slider</option>
                        <option value="3">Columnas</option>
                        <option value="4">Maps</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="newcom(this);">Crear</button>
            </div>
        </div>

    </div>
</div>

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>

var LANDING = <?=$info['id_reg']?>;

function newcom(e){
    var _data = {
        tipo:$('#tiponew').val(),
        orden :$('.itemComp ').last().data('orden')+1,
        landing : LANDING,
        ACT : 'NEW'

    };


    $.get( "ac_update_land.html", _data).done(function( data ) {

        window.location.reload(true);
    });
}

    $(document).ready(function (e) {
        $('.textarea').summernote
        ({
            minHeight: 200,
            maxHeight: 250,
            styleWithSpan: false,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ['fullscreen', 'codeview']],
                ['help', ['help']]
            ],
            callbacks: {
                wonChange: function(contents, $editable) {
                    console.log($editable)

                }
            }
        });

        $('.textarea').on('summernote.change', function(we, contents, $editable) {

            update(we.target,contents)
        })

        $( ".contenidoComp" ).sortable({
            items: '.itemComp',
            update: function( event, ui ) {
                console.log(event)
                updateorden(event);

            }
        }).accordion({
            collapsible: true,
            active: false,
            heightStyle: 'content',
            header: 'div.headerCom'
        });

        $( ".contenidoComp" ).sortable( "disable" );

        $('.changeval').change(function (e) {
            update(this,this.value)
        });

        $('.changevallan').change(function (e) {
            let _data = {
                text:this.value,
                ACT : "UPDATELAN",
                id:this.dataset.id,
                row:this.dataset.col
            };




            $.get( "ac_update_land.html", _data).done(function( data ) {

            });
        });

    });


    $('.ordenarBTN').click(function (e) {
        if ($(this).hasClass('btn-info')){
            this.innerHTML="Guardar";
            $(this).removeClass('btn-info').addClass('btn-success');
            $('.itemComp').addClass('curmove')
            $( ".contenidoComp" ).sortable( "enable" );

        }else{
            this.innerHTML="Ordenar";
            $(this).removeClass('btn-success').addClass('btn-info');
            $('.itemComp').removeClass('curmove')
            $( ".contenidoComp" ).sortable( "disable" );
        }

    });


    function updateorden(ev) {

        $('.itemComp ').each(function (e,i) {
            this.dataset.orden = (e+1);
            let x ={
                dataset : {
                    ACT: "UPDATE",
                    col: "orden",
                    id: this.dataset.id_reg,
                    lan: LANDING
                }
            }

            update(x,e+1);
        });

       ;

    }

    function update(e,val) {
        var _data =e.dataset;
        console.log(e.dataset)
        _data.text = val;
        _data.ACT = "UPDATE";

        $.get( "ac_update_land.html", _data).done(function( data ) {

        });

    }

</script>