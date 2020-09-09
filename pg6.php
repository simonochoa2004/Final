<!DOCTYPE hmtl>
<html>
    <head>
        <title>Mostrar Datos</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body class="f">
        <center>      
      <div class="f1">
        <h1>Mostrando Datos </h1>
        </div>
        <br><br><br><br><br><br><br><br>
        <table border="2">
            <tr>

                <th class="f2">nombre</th>
                <th>puntaje</th>
                
            </tr>
                <?php


                    $conexion=new mysqli("localhost","root","","formulario");
                    $sql = "SELECT * FROM final2";
                    $resultado=$conexion->query($sql);
                    while($dato=$resultado->fetch_assoc()){
                ?>   
                <tr>
                    <th><?php echo $dato['nombre']; ?> </th>
                    <th><?php echo $dato['punt']; ?> </th>
                </tr>   
                <?php
                    }
                ?> 
            </tr>
        </table>
        <br>
        <br>
        <form action="pg.php"> 
        <input type="submit" name="volver" value="volver" class="f3">
        </form>
        </center>

    </body>
</html>