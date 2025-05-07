<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
# ⚠⚠⚠ LEA CON CUIDADO ⚠⚠⚠

// PAGINA PRINCIPAL PARA EMAIL NO MODIFIQUE A MENOS QUE SEPA LO QUE ESTA HACIENDO.

// © ANGELUS INFERNUS

# ⚠⚠⚠ DO NOT DELETE ⚠⚠⚠

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once './constantes.php';

//Load Composer's autoloader
require 'vendor/autoload.php';

$name = $_POST['name'];              //Capturando nombre del destinatario
$address = $_POST['email'];             //Capturando email del destinatario
$asunto = $_POST['asunto'];          //Capturando asunto del mensaje
$mensaje_contacto = $_POST['mensaje'];  //Capturando el mensaje del contacto
$mensaje = '
<!DOCTYPE html>

<html
  lang="es"
  xmlns="http://www.w3.org/1999/xhtml"
  xmlns:o="urn:schemas-microsoft-com:office:office"
>
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <meta name="x-apple-disable-message-reformatting" />

    <title></title>

    <!--[if mso]>
      <noscript>
        <xml>
          <o:OfficeDocumentSettings>
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
      </noscript>
    <![endif]-->

    <style>
      table,
      td,
      div,
      h1,
      p {
        font-family: Arial, sans-serif;
      }

      table,
      td {
        border: 0;
      }
    </style>
    <body style="margin: 0; padding: 0">
      <table
        role="presentation"
        style="
          width: 100%;
          border-collapse: collapse;
          border: 0;
          border-spacing: 0;
          background: #ffffff;
        "
      >
        <tr>
          <td align="center" style="padding: 0">
            <table
              role="presentation"
              style="
                width: 602px;
                border-collapse: collapse;
                border: 0 0 1px 0 solid #cccccc;
                border-spacing: 0;
                text-align: left;
              "
            >
              <tr>
                <td
                  align="center"
                  style="
                    padding: 40px 0 30px 0;
                    background: #ffffff;
                    border: 1px solid #dadceb;
                  "
                >
                  <img
                    src="https://github.com/MHerrera94/AluraChallengerPortafolio/blob/master/assets/favicon.png?raw=true"
                    alt="angelusinfernus"
                    width="150"
                    style="height: auto; display: block"
                  />
                  <h1 style="color: #000000">
                    Angelus<span> Infernus
                  </h1>
                </td>
              </tr>

              <tr>
                <td
                  style="
                    padding: 36px 30px 42px 30px;
                    background-color: #dadceb;
                    border: 1px solid #dadceb;
                  "
                >
                  <table
                    role="presentation"
                    style="
                      width: 100%;
                      border-collapse: collapse;
                      border: 0;
                      border-spacing: 0;
                    "
                  >
                    <tr>
                      <td align="center" style="padding: 0; ">
                        <h3>Hola tienes un nuevo mensaje</h3>
                        <h1 style="font-weight: lighter">
                          !Hola Soy <span style="font-weight: bold">' . $name . '</span>¡
                        </h1>
                        <p>
                          Asunto: ' . $asunto . '.
                        </p>

                        <p>
                          <a
                            style="
                              color: #022b3b;
                              text-decoration: none;
                              font-weight: bold;
                            "
                            href="https://informacion.prowessec.com"
                            >Mensaje: ' .  $mensaje_contacto . ' </a
                          >
                        </p>
                      </td>
                    </tr>

                    <tr>
                      <td style="padding: 0; ">
                        <table
                          role="presentation"
                          style="
                            width: 100%;
                            border-collapse: collapse;
                            border: 0;
                            border-spacing: 0;
                          "
                        >

                            <td
                              style="
                                width: 100%;
                                padding: 0;
                                vertical-align: top;
                              "
                            >
                              <table
                                role="presentation"
                                style="
                                  width: 100%;
                                  border-collapse: collapse;
                                  border: 0;
                                  border-spacing: 0;
                                "
                              >
                                <tr>
                                  <td
                                    style="padding: 0; width: 25%"
                                    align="right"
                                  >
                                    <p>Correo: </p>
                                  </td>

                                  <td
                                    style="padding: 0; width: 50%"
                                    align="left"
                                  >
                                    <p
                                      style="color: #022b3b; font-weight: bold"
                                    >
                                    ' . $address . '
                                    </p>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td align="center" style="padding: 0; background: #ffffff">
                  <table
                    role="presentation"
                    style="
                      width: 100%;
                      border-collapse: collapse;
                      border: 1px solid #dadceb;
                      border-spacing: 0;
                    "
                  >
                    <tr>
                      <td align="center" style="padding: 0">
                        <p style="font-size: 0.7rem; margin: 1px 0 0">
                          Mensaje de envio automatico, no responda a este
                          mensaje.
                        </p>
                      </td>
                    </tr>

                    <tr>
                      <td align="center" style="padding: 0">
                        <p style="font-size: 0.8rem; margin: 2px 0">
                          © Angelus<span> Infernus
                        </p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </body>
  </head>
</html>
';
// Instancio un objeto de la clase PHPMailer: passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = 0;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Enviar mediante SMTP
  $mail->Host       = EMAIL_HOST;                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Activar SMTP autenticador
  $mail->Username   = EMAIL_NAME;                     //Nombre de usuario SMTP
  $mail->Password   = EMAIL_PASS;                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = EMAIL_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom(EMAIL_NAME, SITE_NAME);      //Email y nombre del remitente del mensaje
  $mail->addAddress("miguelherrera2094@gmail.com");     //Direccion de correo y nombre del destinatario/nombre es opcional
  $mail->addReplyTo(EMAIL_NAME, 'Contacto'); //Direccion para recibir correos: se recomienda sea el mismo del from para evitar llegar a la carpeta spam

  //Archivo adjunto al mensaje
  $mail->CharSet = "UTF-8";                             //Caracteres UTF8
  $mail->Encoding = "quoted-printable";


  //Contenido
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = $asunto;               //Asunto al mensaje

  //Defino el cuerpo del mensaje en una variable $body

  //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
  $mail->MsgHTML($mensaje);                      //Texto del mensaje en formato HTML


  $mail->send();                          //Envío el mensaje.
  echo 'Mensaje enviado!!';
  $address = '';
} catch (Exception $e) {
  echo $address;
  echo "Error al enviar el mensaje: {$mail->ErrorInfo}" .  $address;
}
header('Location: ../');
exit();
