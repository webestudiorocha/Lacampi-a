<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();
$mail = new Clases\Email();

$template->set("title", TITULO . " | Contacto");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();
?>

    <div class="header header-1">
        <?php include("assets/inc/nav.inc.php"); ?>
    </div>

    <div id="nosotros">
        <div class="content-wrap pt-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h2 class="section-heading center">
                            Envianos tus consultas
                        </h2>
                    </div>
                    <div class="col-md-8">
                        <?php
                        if (isset($_POST["enviar"])) {
                            $mensaje = "Nuevo envio de formulario de contacto:<br/>";
                            $mensaje .= "Nombre: " . $funciones->antihack_mysqli(isset($_POST["nombre"]) ? $_POST["nombre"] : '') . "<br/>";
                            $mensaje .= "Telefono: " . $funciones->antihack_mysqli(isset($_POST["telefono"]) ? $_POST["telefono"] : '') . "<br/>";
                            $mensaje .= "Email: " . $funciones->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : '') . "<br/>";
                            $mensaje .= "Mensaje: " . $funciones->antihack_mysqli(isset($_POST["mensaje"]) ? $_POST["mensaje"] : '') . "<br/>";

                            $mail->set("asunto" , "Nuevo mensaje de contacto");
                            $mail->set("receptor" , EMAIL);
                            $mail->set("emisor" , $funciones->antihack_mysqli(isset($_POST["email"]) ? $_POST["email"] : ''));
                            $mail->set("mensaje" , $mensaje);
                            $mail->emailEnviar();
                        }
                        ?>
                        <form method="post" class="row">
                            <label class="col-md-4">
                                <b>Nombre y apellido:</b><br/>
                                <input class="form-control" name="nombre"/>
                            </label>
                            <label class="col-md-4">
                                <b>Celular / Teléfono:</b><br/>
                                <input class="form-control" name="telefono"/>
                            </label>
                            <label class="col-md-4">
                                <b>Email:</b><br/>
                                <input class="form-control" name="email"/>
                            </label>
                            <label class="col-md-12">
                                <b>Mensaje:</b><br/>
                                <textarea class="form-control" name="mensaje"></textarea>
                            </label>
                            <div class="col-md-12 mt-20">
                                <input type="submit" name="enviar" value="Enviar consulta" class="btn btn-success"/>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4"><br/>
                        <?php
                        $contenidos->set("cod", "DATOS DE CONTACTO");
                        $datos_de_contacto = $contenidos->view();
                        echo $datos_de_contacto["contenido"];
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$template->themeEnd();
?>