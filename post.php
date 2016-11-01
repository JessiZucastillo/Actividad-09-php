<?php
  $nombre = $_POST['nombre'];
  $email=$_POST['email'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];


  $nombrephp='Tu nombre es: '. $nombre;
  $emailphp='Tu email es: '.$email;
  $asuntophp='Tu asunto es: '.$asunto;
  $mensajephp='Tu mensaje es: '.$mensaje;


  $cabeceras='From: '.$email.'\r\n'.'Reply-To: '.$email.'\r\n'.'X-Mailer: PHP/'.phpversion();
  mail($email,$asunto,$respuestaphp,$cabeceras);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Repaso DAP</title>
  </head>
  <body>
    <h1><?php echo $nombrephp ?></small></h1>
    <h1><?php echo $emailphp ?></small></h1>
    <h1><?php echo $asuntophp ?></small></h1>
    <h1><?php echo $mensajephp ?></small></h1>
    <p>
      <?php echo $respuestaphp ?>
    </p>
  </body>
</html>
