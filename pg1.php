 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ingreso</title>
 </head>
 <h1>TE HAS REGISTRADO</h1>
 <body style="background-color: red">
 <?php
 	$conexion=new mysqli("localhost","root","","formulario"); 

 	 $nombre=$_POST['nombre'];
    $sql="INSERT INTO final2 (nombre) VALUES ('$nombre')"; 
    $ejecutar=mysqli_query($conexion, $sql);
    ?>
 	 <form action="index.php">
 	 	<input type="submit" name="volver" value="volver">
 	 </form>
 </body>
 </html>
