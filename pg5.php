<!DOCTYPE html>
<html>
<head>
	<title>Validar</title>
</head>
<body style="background-color: #FFB900; color: red; font-size: 25px;text-align: center;">

<?php
	
	$nombre=$_POST['nombre'];
	$nombre1=$_REQUEST['nombre1'];
	$precio=$_POST['precio'];
	$quiere=$_POST['quiere'];
	$paga=$_POST['paga'];
	$cantidad=$_POST['cantidad'];

$padevuelta=$precio*$quiere;

if ($padevuelta<$paga) 
{

	$devuelta=$paga-$padevuelta;
	echo "Le devuelvo:".$devuelta;
	echo "<br>";
	echo "<br>";
}
else
{
	echo "Dinero insuficiente";
}

	
	if($cantidad<$quiere)
	{

		echo "no hay suficientes unidades <br>";
		echo"De momento solo tenemos : ". $quiere ." unidades de : " . $nombre."<br>";
		echo"No se dispone de :".$cantidad ." unidades para vender<br>";
		

		echo "<a href='comprar.php'> comprar </a>";
	}

	else
	{
		$vcantidad=$cantidad-$quiere;

		$conexion=new mysqli("localhost","root","","parcial");

    	$sql="UPDATE tabla SET  nombre='$nombre', precio='$precio', cantidad='$vcantidad' WHERE nombre='$nombre1'";
		$resultado=$conexion->query($sql);
		
		echo "Señor usuario, la compra ha sido efectuada";

	}
	

 ?> 
 
 <form action="pg.html">
 	<input type="submit" value="Pagina">
 </form>

</body>
</html>
