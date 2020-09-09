<!DOCTYPE hmtl>
<html>
    <head>
        <title>MENU</title>
     <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body class="d">
      <center>
        <br>
        <h1 style="color: green" >Poner la respuesta tal cual dice en el campo de la opcion elegida</h1>
        <table border="2">
                <th class="d1">Pregunta</th>
                <th>Opcion A</th>
                <th>Opcion B</th>
                 <th>Opcion C</th>
                  <th>Opcion D</th>
                
            </tr>
                <?php
                $p=rand(3,42);
                    $conexion=new mysqli("localhost","root","","formulario");
                    $sql = "SELECT * FROM final WHERE id=$p";
                    $resultado=$conexion->query($sql);
                    while($dato=$resultado->fetch_assoc()){
                ?>   
                <tr>
                    
                    <th><?php echo $dato['preguntas']; ?> </th>
                    <th><?php echo $dato['opciona']; ?> </th>
                     <th><?php echo $dato['opcionb']; ?> </th>
                      <th><?php echo $dato['opcionc']; ?> </th>
                       <th><?php echo $dato['opcionv']; ?> </th>
                    
                    
                    <?php 
                           $punt=0;
                           $i=0;
                     ?>
                </tr>   
               
            </tr>
        </table>
        </center>

        </div>
        <br>
        <br>
<center>
        <form action="pg3.php?opv=<?php echo $dato['opcionv']; ?>" method="POST">
            <input type="text" name="resp" placeholder="respuesta" class="d3">
            <input type="text" name="punt" style="display: none;" value="<?php  echo $punt ?>">
            <input type="text" name="i" style="display: none;" value="<?php  echo $i ?>">
<br><br>

            <input type="submit" name="enviar" class="d4">
            
        </form>
        </center>
 <?php
               

                    } 
                    
                ?>