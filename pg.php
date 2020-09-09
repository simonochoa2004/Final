 <!DOCTYPE html>
 <html>
 <head>
 	<title>Inicio</title>
 	<link rel="stylesheet" type="text/css" href="estilos.css">
 </head>
 <body class="c">
<br>
<div class="c1">
<h1 style="text-align: center">Bienvenido a nuestro trivia</h1>
<h3>Que funcion desea ejercer?</h3>
</div>

<div class="c2">
	<center>
		<br>
 <form action="pg2.php" method="POST">
 	<input type="submit" value="Participar" class="c3">
 </form>
<br>
 <form action="pg6.php" method="POST">
 	<input type="submit" value="Ver concursantes" class="c4">

 </form>
 <br>

 <form action="index2.php" method="POST">
 	<input type="submit" value="Terminar" class="c5">
</center>
 </form>
 <h1 style="color: green; text-align: center;" >Si te equivocas, pierdes!</h1>
 </div>
 

<?php
error_reporting(0);
$nombre=$_POST['nombre'];
?>
<form action="pg7.php?opv=<?php echo $nombre['nombre']; ?>" method="POST" >
<input type="text" name="nombre" value="<?php echo $nombre; ?>" style="display: none;">
</form>
<br>
<?php
session_start();
$nombre=$_SESSION['nombre'];

?>
 </form>
 </body>
 </html> 