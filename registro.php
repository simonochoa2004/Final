<!DOCTYPE html>
 <html>
 <head>
 	<title>ingresar</title>
 	<link rel="stylesheet" type="text/css" href="estilos.css">
 </head>
 <body class="b">
<div class="b1">
 <form action="pg.php" method="POST">
 	<h1>TE HAS REGISTRADO!</h1>
 	<input type="submit" value="Continuar" class="b2">
 </form>
 </div>

 <?php
 $nombre=$_POST['nombre'];
session_start();
$_SESSION['nombre']=$nombre;
?>




 </body>
 </html>
