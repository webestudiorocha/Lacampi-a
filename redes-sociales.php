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

$template->set("title", TITULO." | Galería de Imágenes");
$template->set("description", "Mirá la galeria de imágenes de nuestro loteo.");
$template->set("keywords", "loteo la campiña, galeria de fotos de loteo, fotos de la campiña");
$template->set("favicon", LOGO);
$template->themeInit();

?>
    <div class="header header-1">
        <?php include("assets/inc/nav.inc.php"); ?>
    </div>

    <div id="galeria">
        <div class="content-wrap pt-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h2 class="section-heading center">
                            Redes Sociales
                        </h2>
                    </div>
                    <div class="col-md-12">
                        <!-- Place <div> tag where you want the feed to appear -->
                        <div id="curator-feed"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
                        <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
                        <script type="text/javascript">
                            /* curator-feed */
                            (function () {
                                var i, e, d = document, s = "script";
                                i = d.createElement("script");
                                i.async = 1;
                                i.src = "https://cdn.curator.io/published/5b7a65b0-6513-49b3-a6d6-9236932d1b48.js";
                                e = d.getElementsByTagName(s)[0];
                                e.parentNode.insertBefore(i, e);
                            })();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $template->themeEnd() ?>