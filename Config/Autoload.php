<?php
namespace config;
class autoload
{

    public static function runSitio()
    {
        require_once "Config/Minify.php";
        session_start();
        $_SESSION["cod_pedido"] = mb_strtoupper(isset($_SESSION["cod_pedido"]) ? $_SESSION["cod_pedido"] : substr(md5(uniqid(rand())), 0, 10));
        define('URL', "http://" . $_SERVER['HTTP_HOST'] . "");
        define('CANONICAL', "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        define('GOOGLE_TAG', "");
        define('TITULO', "La Campiña");
        define('TELEFONO', "");
        define('CIUDAD', "Brinkmann");
        define('PROVINCIA', "Cordoba");
        define('EMAIL', "info@lacampiña.com.ar");
        define('PASS_EMAIL', "inLa2019");
        define('SMTP_EMAIL', "mail.lacampiña.com.ar");
        define('DIRECCION', "");
        define('SALT',hash("sha256","salt@estudiorochayasoc.com.ar"));
        define('LOGO', URL . "/assets/images/logo.png");
        define('APP_ID_FB', "");
        spl_autoload_register(
            function ($clase) {
                $ruta = str_replace("\\", "/", $clase) . ".php";
                include_once $ruta;
            }
        );
    }

    public static function runSitio2()
    {
        spl_autoload_register(
            function ($clase) {
                $ruta = str_replace("\\", "/", $clase) . ".php";
                include_once "../../" . $ruta;
            }
        );
    }

    public static function runAdmin()
    {
        session_start();
        define('URLSITE', "http://" . $_SERVER['HTTP_HOST'] . "");
        define('URL', "http://" . $_SERVER['HTTP_HOST'] . "/admin");
        define('CANONICAL', "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        require_once "../Clases/Zebra_Image.php";
        spl_autoload_register(
            function ($clase) {
                $ruta = str_replace("\\", "/", $clase) . ".php";
                include_once "../" . $ruta;
            }
        );
    }
}
