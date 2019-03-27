<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();
$galerias = new Clases\Galerias();
$imagenes = new Clases\Imagenes();

$id = $funciones->antihack_mysqli(isset($_GET["id"]) ? $_GET["id"] : '');
$id = str_replace("-", " ", $id);
$contenidos->set("cod", $id);
$contenido = $contenidos->view();
$template->set("title", TITULO . " | " . ucfirst($contenido['cod']));
$template->set("description", substr($contenido['contenido'], 0, 160));
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
                            <?= ucfirst($contenido['cod']); ?>
                        </h2>
                        <p>
                            <?= $contenido['contenido']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$template->themeEnd();
?>