<?php namespace Clases;
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Email
{
    private $asunto;
    private $receptor;
    private $emisor;
    private $mensaje;

    public function set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    public function emailEnviar()
    {
        $mail = new PHPMailer(true);
        $mensaje = '<body style="background: #0f74a8;margin:0;padding:0"><div style="background: #fff;width:700px;margin:auto;padding:20px"><div><br/><img src="'.LOGO.'" width="200"/><br/><hr/></div>'.$this->mensaje.'<br/></div></body>';
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->Host = SMTP_EMAIL;
            $mail->SMTPAuth = true;
            $mail->Username = EMAIL;
            $mail->Password = PASS_EMAIL;
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom($this->emisor, 'Loteo La Campiña');
            $mail->addAddress($this->receptor, '');
            $mail->isHTML(true);
            $mail->Subject = $this->asunto;
            $mail->Body = $mensaje;
            $mail->AltBody = strip_tags($mensaje);
            $mail->send();
            return 1;
        } catch (Exception $e) {
            return 0;
        }
    }
}

?>