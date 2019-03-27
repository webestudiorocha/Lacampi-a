<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();

//Clases
$imagenes = new Clases\Imagenes();
$novedades = new Clases\Novedades();
$banners = new Clases\Banner();
//Productos
$cod = $funciones->antihack_mysqli(isset($_GET["cod"]) ? $_GET["cod"] : '');
$novedades->set("cod", $cod);
$novedadData = $novedades->view();
$imagenes->set("cod", $novedadData['cod']);
$imagenData = $imagenes->view();
$novedadesData = $novedades->list('');
$fecha = explode("-", $novedadData['fecha']);
$template->set("title", ucfirst($novedadData['titulo']));
$template->set("description", $novedadData['description']);
$template->set("keywords", $novedadData['keywords']);
$template->set("imagen", URL . "/" . $imagenData['ruta']);
$template->set("favicon", LOGO);
$template->themeInit();
//
?>

    <div class="header header-1">
        <?php include("assets/inc/nav.inc.php"); ?>
    </div>

    <div class="container">
        <div class="row  mt-20">
            <div id="sns_mainmidle">
                <div class="blogs-page">
                    <div class="postWrapper v1">
                        <h1 class="fs-22 text-uppercase"><?= ucfirst($novedadData['titulo']); ?></h1>
                        <hr/>
                        <a class="post-img">
                            <img src="<?= URL . '/' . $imagenData['ruta']; ?>" alt="<?= $novedadData['titulo']; ?>" width="100%">
                        </a>
                        <br>
                        <div class="date">
                            <hr/>
                            <span class="poster"><b class="fs-12">FECHA DE SUBIDA: </b><?php echo $fecha[2] . "/" . $fecha[1] . "/" . $fecha[0] ?></span>
                            <hr/>
                        </div>

                        <div class="post-content">
                            <p class="text1">
                                <?= $novedadData['desarrollo']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 mb-20">
                <!-- AddToAny BEGIN -->
                <label>Compartir en:</label>
                <!-- AddToAny BEGIN -->
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                    <a class="a2a_button_facebook"></a>
                    <a class="a2a_button_twitter"></a>
                    <a class="a2a_button_google_plus"></a>
                    <a class="a2a_button_pinterest"></a>
                    <a class="a2a_button_whatsapp"></a>
                    <a class="a2a_button_facebook_messenger"></a>
                </div>
                <script async src="https://static.addtoany.com/menu/page.js"></script>
                <!-- AddToAny END -->
            </div>
        </div>
    </div>

    <div id="blog" class="">
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

<?php
$template->themeEnd();
?>