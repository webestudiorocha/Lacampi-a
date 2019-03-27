<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones = new Clases\PublicFunction();
$template->set("title", TITULO ." | Blog");
$template->set("description", "");
$template->set("keywords", "");
$template->set("favicon", LOGO);
$template->themeInit();
$novedades = new Clases\Novedades();
$cantidad = 6;
$pagina = $funciones->antihack_mysqli(isset($_GET["pagina"]) ? $_GET["pagina"] : '0');
$novedadesData = $novedades->list_with_options('', '', ($cantidad * $pagina) . ',' . $cantidad);
$novedadesPaginador = $novedades->paginador('', $cantidad);
$imagenes = new Clases\Imagenes();
if ($_GET) {
    $anidador = "?";
} else {
    $anidador = "&";
}
?>
    <div class="header header-1">
        <?php include("assets/inc/nav.inc.php"); ?>
    </div>

    <div id="blogs">
        <div class="content-wrap pt-10">
            <div class="container">
                <h2 class="section-heading center">
                    Blog
                </h2>
                <div class="row">
                    <?php
                    foreach ($novedadesData as $nov) {
                        $imagenes->set("cod", $nov['cod']);
                        $img = $imagenes->view();
                        $fecha = explode("-", $nov['fecha']);
                        ?>
                        <div class="post col-md-6">
                            <div class="post-img">
                                <a href="<?php echo URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>">
                                    <img src="<?= URL . '/' . $img['ruta'] ?>" width="100%"/>
                                </a>
                            </div>
                            <div class="mb-0 mt-10"><?php echo $fecha[2] . "/" . $fecha[1] . "/" . $fecha[0] ?></div>
                            <h1 class="post-title fs-16 mb-0">
                                <a href="<?php echo URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>"><?= ucfirst($nov['titulo']) ?></a>
                            </h1>
                            <div class="post-content mt-10">
                                <p><?php echo strip_tags(substr($nov["desarrollo"], 0, 400)); ?>...</p>
                            </div>
                            <div class="link-readmore">
                                <a title="Leer más" href="<?php echo URL . '/blog/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['cod'] ?>" class="btn btn-primary">Leer más</a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php if ($novedadesPaginador != 1 && $novedadesPaginador != 0) { ?>
                <div class="container mt-20 ">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><<</a></li>
                            <?php
                            $links = '';
                            $links .= "<li class='page-item'><a class='page-link' href='" . URL . "/blogs" . $anidador . "pagina=1'>1</a></li>";
                            $i = max(2, $pagina - 5);

                            if ($i > 2) {
                                $links .= "<li class='page-item'><a class='page-link' href='#'>...</a></li>";
                            }
                            for (; $i < min($pagina + 6, $novedadesPaginador); $i++) {
                                $links .= "<li class='page-item' ><a class='page-link' href='" . URL . "/blogs" . $anidador . "pagina=" . $i . "'>" . $i . "</a></li>";
                            }
                            if ($i != $novedadesPaginador) {
                                $links .= "<li class='page-item'><a class='page-link' href='#'>...</a></li>";
                                $links .= "<li class='page-item'><a class='page-link' href='" . URL . "/blogs" . $anidador . "pagina=" . $novedadesPaginador . "'>" . $novedadesPaginador . "</a></li>";
                            }
                            echo $links;
                            ?>
                            <li class="page-item"><a class="page-link" href="#">>></a></li>
                        </ul>
                    </nav>
                </div>
            <?php } ?>
        </div>
    </div>
<?php
$template->themeEnd();
?>