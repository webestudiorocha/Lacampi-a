<?php
$contenidos = new Clases\Contenidos();
?>
<div class="footer">
    <div class="content-wrap">
        <div class="container">
            <?php
            $contenidos->set("cod", "Pie de pagina");
            $c_pie = $contenidos->view();
            echo $c_pie["contenido"];
            ?>
        </div>
    </div>

    <div class="fcopy">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right">
                    <p class="ftex mt-1 text-white">Copyright 2019 &copy; <a href="https://www.estudiorochayasoc.com" class="text-white" target="_blank" title="Estudio Rocha & Asociados">Estudio Rocha & Asociados</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="btn-redes-sociales">
    <a target="_blank" class="d-none d-md-inline d-lg-inline" href="https://m.me/251030235558680" style="vertical-align:middle;box-shadow:0px 0px 10px #333;font-size:14px;padding:10px;border-radius:5px;background-color:#1787fb;color:white;text-shadow:none;">
        <i class="fa fa-lg fa-facebook-square"></i> <span class="hidden-xs hidden-sm">Comunicate vía</span> Facebook
    </a> &nbsp;
    <a target="_blank" href="https://wa.me/543562417259" style="vertical-align:middle;box-shadow:0px 0px 10px #333;font-size:14px;padding:10px;border-radius:5px;background-color:#369317;color:white;text-shadow:none;">
        <i class="fa fa-lg fa-whatsapp"></i> <span class="hidden-xs hidden-sm">Comunicate vía</span> WhatsApp
    </a>
</div>

<!-- JS VENDOR -->
<script src="<?= URL ?>/assets/js/vendor/jquery.min.js"></script>
<script src="<?= URL ?>/assets/js/vendor/bootstrap.min.js"></script>
<script src="<?= URL ?>/assets/js/vendor/owl.carousel.js"></script>
<script src="<?= URL ?>/assets/js/vendor/jquery.magnific-popup.min.js"></script>

<!-- SENDMAIL -->
<script src="<?= URL ?>/assets/js/vendor/validator.min.js"></script>
<script src="<?= URL ?>/assets/js/vendor/form-scripts.js"></script>

<script src="<?= URL ?>/assets/js/script.js"></script>

<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

</body>
</html>