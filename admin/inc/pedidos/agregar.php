<!--
<script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.9.0/typeahead.min.js"></script>
-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php
$pedidos = new Clases\Pedidos();
$productos = new Clases\Productos();
$productos_array = $productos->list("");
$producto_ = '[';

foreach ($productos_array as $producto) {
    $producto_ .= "{";
    $producto_ .= "value: '" . $producto["titulo"] . "',cantidad: '" . $producto["stock"] . "',precio: '" . $producto["precio"] . "'";
    $producto_ .= "},";
}
$producto_ .= "]";

if (isset($_POST["agregar"])) {
    $titulo = $funciones->antihack_mysqli(isset($_POST["titulo"]) ? $_POST["titulo"] : '');
    $link = $funciones->antihack_mysqli(isset($_POST["link"]) ? $_POST["link"] : '');
    $videos->set("titulo", $titulo);
    $videos->set("link", $link);
    $videos->add();
    $funciones->headerMove(URL . "/index.php?op=videos");
}

?>


<div class="mt-20">
    <div class="col-md-12">
        <h4 class="pull-left">Agregar Pedido</h4>
        <button class="pull-right btn btn-info" onclick="$('#form_agregar').append($('#agregar_input').html())">Agregar Item</button>
        <div class="clearfix"></div>
        <hr/>
    </div>

    <form method="post" id="carro" class="col-md-12">
        <div class="row mb-40" id="form_agregar">
            <div class="col-md-4">
                Título:
                <br/>
                <div class="ui-widget">
                    <input type="text" class="autocomplete form-control" name="titulo" value=""  id="<?= rand(0,999) ?>"/>
                </div>
            </div>
            <div class="col-md-2">
                Cantidad:
                <br/>
                <input type="text" name="cantidad" value=""/>
            </div>
            <div class="col-md-3">
                Precio:
                <br/>
                <input type="text" name="precio" value=""/>
            </div>
            <div class="col-md-2">
                Total:
                <br/>
                <input type="number" name="total" value="" readonly/>
            </div>
            <div class="col-md-1">
                <br/>
                <button class="btn btn-danger btn-block"><i class="fa fa-trash"></i></button>
            </div>
        </div>
        <div class="clearfix"></div>
        <input type="submit" class="btn btn-primary" name="agregar" value="Agregar Pedidos"/>
    </form>
</div>

<div class="row mb-40" id="agregar_input" style="visibility: hidden">
    <div class="col-md-4">
        Título:
        <br/>
        <div class="ui-widget">
            <input type="text" class="autocomplete form-control" name="titulo" value="" id="<?= rand(0,999) ?>"/>
        </div>
    </div>
    <div class="col-md-2">
        Cantidad:
        <br/>
        <input type="text" name="cantidad" value=""/>
    </div>
    <div class="col-md-3">
        Precio:
        <br/>
        <input type="text" name="precio" value=""/>
    </div>
    <div class="col-md-2">
        Total:
        <br/>
        <input type="number" name="total" value="" readonly/>
    </div>
    <div class="col-md-1">
        <br/>
        <button class="btn btn-danger btn-block"><i class="fa fa-trash"></i></button>
    </div>
</div>


<script>


    $(document).ready(function () {
        $(document).on('keydown', '.autocomplete', function () {
            var id = this.id;
            var splitid = id.split('_');
            var index = splitid[1];

            // Initialize jQuery UI autocomplete
            $('#' + id).autocomplete({
                source: <?= $producto_ ?>,
                select: function (event, ui) {
                    $(this).val(ui.item.label); // display the selected text
                    var userid = ui.item.value; // selected value
                    $("input[name='titulo'+index]").val(ui.item.value);
                    $("input[name='cantidad'+index]").val(ui.item.cantidad);
                    $("input[name='precio'+index]").val(ui.item.precio);
                    actualizar();
                    return false;
                }
            });
        });

        // Add more
        $('#addmore').click(function () {

            // Get last id
            var lastname_id = $('.tr_input input[type=text]:nth-child(1)').last().attr('id');
            var split_id = lastname_id.split('_');

            // New index
            var index = Number(split_id[1]) + 1;

            // Create row with input elements
            var html = "<tr class='tr_input'><td><input type='text' class='username' id='username_" + index + "' placeholder='Enter username'></td><td><input type='text' class='name' id='name_" + index + "' ></td><td><input type='text' class='age' id='age_" + index + "' ></td><td><input type='text' class='email' id='email_" + index + "' ></td><td><input type='text' class='salary' id='salary_" + index + "' ></td></tr>";

            // Append data
            $('tbody').append(html);

        });
    });


    $(".autocomplete").each(function () {
        $(this).autocomplete({
            source: <?= $producto_ ?>,
            select: function (event, ui) {
                $("input[name='titulo']").val(ui.item.value);
                $("input[name='cantidad']").val(ui.item.cantidad);
                $("input[name='precio']").val(ui.item.precio);
                actualizar();
            }
        });
    });

    function actualizar() {
        var precio = parseFloat($("input[name='precio']").val());
        var cantidad = parseFloat($("input[name='cantidad']").val());
        $("input[name='total']").val(cantidad * precio);
    };
</script>