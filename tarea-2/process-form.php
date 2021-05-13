<?php
  // var_dump($_POST);
  // Calcular la cantida de elementos del array $_POST
  // $username = $_GET['username'];
  // $password = $_GET['password'];
  //$count = count($_POST);
  //echo $count
  
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $dni = $_POST['dni'];
  $genero = $_POST['generoxy'];
  $edad = $_POST['edad'];
  $foto = $_POST['foto'];
  $direccion = $_POST['direccion'];
  $pais = $_POST['pais'];
  $mail = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $comentarios = $_POST['comentarios'];

  echo "<h1><mark>“10 años de INOCUA” LECCIONES APRENDIDAS</mark></h1>";
  echo "<h3><strong>  Confirmación de Registro </strong></h3>";
  echo "Sr. $nombres $apellidos, se han registrado sus datos: <br><br>";
  echo "<strong>Documento de identidad:</strong> $dni . <br>";
  echo "<strong>Género:</strong> $genero . <br>";
  echo "<strong>Edad:</strong> $edad . <br>";
  echo "<strong>Foto:</strong> $foto . <br>";
  echo "<strong>Dirección:</strong> $direccion . <br>";
  echo "<strong>País:</strong> $pais . <br>";
  echo "<strong>Correo Electronico:</strong> $mail . <br>";
  echo "<strong>Teléfono:</strong> $telefono . <br>";
  echo "<strong>Comentarios:</strong> $comentarios . <br><br>";


  echo "<strong>Nota:</strong> Sus accesos al Seminario le seran enviados el día previo al evento al correo: $mail.<br> Agradecemos la confianza puesta en nosotros para su formación profesional";

?>