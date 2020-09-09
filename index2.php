 <!DOCTYPE html>
 <html>
 <head>
 	<title>ingresar</title>
 		<link rel="stylesheet" type="text/css" href="estilos.css">
 </head>

 <body class="w">
 	 <center>
        <div class="w1">
 <form action="registro.php" method="POST">
 	<h1>REGISTRESE</h1>
 	<input type="text" name="nombre" placeholder="nombre" required="" class="w2">
 	<input type="submit" value="Continuar" class="w3">
 </form>
</div>
 <?php
 $conexion=new mysqli("localhost","root","","formulario");
 error_reporting(0);
                    $sql = "SELECT * FROM final2 WHERE punt=(SELECT MAX(punt) FROM final2)";
                    $resultado=$conexion->query($sql);
                    $dato=$resultado->fetch_assoc();
 ?>
                     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


                    <h1 style="color: green" >El maximo puntaje registrado ha sido:</h1>
                    <h1 style="color: orange"> <?php echo $dato['nombre']; ?> </h1>
                    <h1 style="color: green"> con:</h1>
                    <h1 style="color: orange"> <?php echo $dato['punt']; ?> Puntos</h1>


                    

                    		

</center>
 </body>
 </html>
