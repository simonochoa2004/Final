 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ingreso</title>
 </head>
 <center>
 	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
 <h1>GAME OVER</h1>
 <br> <br> 
 <body style="background-color: red">
 <?php
 	$conexion=new mysqli("localhost","root","","formulario"); 
session_start();
 	 $punt=$_POST['punt'];
 	 $nombre=$_SESSION['nombre'];

    $sql="INSERT INTO final2 (nombre,punt) VALUES ('$nombre','$punt')"; 
    $ejecutar=mysqli_query($conexion, $sql);

    ?>

 	 <form action="pg.php">
 	 	<input type="submit" name="volver" value="volver" >
 	 </form>
 	 </center>
 </body>
 </html>