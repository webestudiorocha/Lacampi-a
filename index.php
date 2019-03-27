<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$novedades = new Clases\Novedades();
$imagenes = new Clases\Imagenes();
$contenidos = new Clases\Contenidos();
$galerias = new Clases\Galerias();
$slider = new Clases\Sliders();

$template->set("title", "Loteo La Campiña | Inicio");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();
?>
    <div class="header header-1">
        <?php include("assets/inc/nav.inc.php"); ?>
    </div>

    <div id="oc-fullslider" class="banner owl-carousel"  >
        <?php
        foreach ($slider->list("") as $value) {
            $imagenes->set("cod",$value["cod"]);
            $img = $imagenes->view();
            ?>
            <div class="owl-slide">
                <div class="item">
                    <img src="<?= URL."/".$img["ruta"] ?>" alt="<?= $value["titulo"] ?>" width="100%">
                    <div class="slider-pos">
                        <div class="container">
                            <div class="wrap-caption center">
                                <h1 class="caption-heading"><?= $value["titulo"] ?></h1>
                                <p><?= $value["subtitulo"] ?></p>
                                <?php
                                if ($value["link"] != '') {
                                    ?>
                                    <a href="#" class="btn btn-light">Ver más</a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
     </div>

    <div class="clearfix"></div>

    <div id="nosotros">
        <div class="content-wrap ">
            <div class="container">
                <div class="col-md-6" >
                <?php
                $contenidos->set("cod", "CONTENIDO INICIO");
                $contenido_inicio = $contenidos->view();
                echo $contenido_inicio["contenido"];
                ?>
                </div>
                <?php/* <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        $galeria = $galerias->list(array("titulo = 'GALERIA INDEX'"));
                        $imagenes->set("cod", $galeria[0]["cod"]);
                        $imagenes->list_for_cod();
                        for ($j = 0; $j < count($imagenes); $j++):
                                ?>
                                <div class="item <?php if ($j == 0) {echo "active";}?>"> <img src="<?= URL . "/" . $imagenes["ruta"]; ?>"  class="img-fluid"></div>
                                <?php endfor?>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
            </div> */ ?>
            </div>
        </div>
    </div>

    <div id="blog" class="bg-secondary">
        <div class="content-wrap">
            <div class="container">
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading center">
                        Últimas Novedades
                    </h2>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <?php
                    foreach ($novedades->list_with_options("", "", "3") as $value) {
                        $imagenes->set("cod", $value["cod"]);
                        $img = $imagenes->view();
                        ?>
                        <div class="col-12 col-md-4">
                            <a href="<?= URL . "/blog/" . $funciones->normalizar_link($value["titulo"]) . "/" . $value["cod"] ?>" title="<?= $value["titulo"] ?>">
                                <div class="rs-image-box">
                                    <div class="media">
                                        <img src="<?= URL . "/" . $img["ruta"] ?>" alt="<?= $value["titulo"] ?>" class="img-fluid">
                                    </div>
                                    <div class="body-text">
                                        <h3 class="title mb-20"><?= $value["titulo"] ?></h3>
                                        <?= substr(strip_tags($value["desarrollo"]), 0, 250) ?>...
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="galeria">
        <div class="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h2 class="section-heading center">
                            Mirá nuestro Loteo
                        </h2>
                    </div>

                    <div class="row popup-gallery gutter-5">
                        <?php
                        $galeria = $galerias->list(array("titulo = 'GALERIA GENERAL DEL LOTEO'"));
                        $imagenes->set("cod", $galeria[0]["cod"]);
                        $i = 1;
                        foreach ($imagenes->list_for_cod() as $img) {
                            if ($i <= 8) {
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
                                $i++;
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $template->themeEnd() ?>