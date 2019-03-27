<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$contenidos = new Clases\Contenidos();
$galerias = new Clases\Galerias();
$imagenes = new Clases\Imagenes();

$contenidos->set("cod", "La Campina");
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
                            Loteo de La Campiña
                        </h2>
                        <p>
                            <?= $contenido['contenido']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="galeria">
        <div class="content-wrap pt-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h2 class="section-heading center">
                            Galería de Imágenes de La Campiña
                        </h2>
                        <p class="subheading text-center">
                            <?php
                            $contenidos->set("cod", "");
                            $contenido_inicio = $contenidos->view();
                            echo $contenido_inicio["contenido"];
                            ?>
                        </p>
                    </div>
                    <div class="row popup-gallery gutter-5">
                        <?php
                        $galeria = $galerias->list(array("titulo = 'GALERIA GENERAL DEL LOTEO'"));
                        $imagenes->set("cod", $galeria[0]["cod"]);
                        $i = 1;
                        foreach ($imagenes->list_for_cod() as $img) {
                            ?>
                            <div class="col-12 col-sm-4 col-md-3">
                                <div class="box-gallery">
                                    <a href="<?= URL . "/" . $img["ruta"]; ?>" title="<?= $galeria[0]["titulo"] ?>">
                                        <img src="<?= URL . "/" . $img["ruta"]; ?>" alt="<?= $galeria[0]["titulo"] ?>" class="img-fluid">
                                        <div class="project-info">
                                            <div class="project-icon">
                                                <span class="fa fa-search"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$template->themeEnd();
?>