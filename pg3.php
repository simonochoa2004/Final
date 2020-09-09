<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body class="h" style="background-color: lightgreen;">

<center>
<?php
$opv=$_REQUEST['opv'];
$resp=$_POST['resp'];
$i=$_POST['i'];
$punt=$_POST['punt'];
$punt1=$punt + 10;
while($i!=1) 
{ 
if($opv==$resp)
{

	?>

	<h1 style="color: green; ">CORRECTO!</h1>
 
  	<?php
  
  
?>
  <form action="pg4.php" method="POST" >
  <input type="text" name="punt"  value="<?php echo $punt; ?>" style="display: none;">
  <input type="text" name="punt1"  value="<?php echo $punt1; ?>" style="display: none;">
  <input type="text" name="i"  value="<?php echo $i; ?>" style="display: none;">
  <input type="submit" name="enviar" value="next">
<?php 
break;
?>
</form>
<?php
}
else
{
$i=$i+1;
session_start();
?>
<h1 style="font-size: 32px">Fallaste!</h1>
<?php 
$_SESSION['punt']=$punt;
echo "su puntaje fue de:" .$punt;
?>
<form action="pg7.php" method="post">
<input type="text" name="punt"  value="<?php echo $punt; ?>" style="display: none;">
<input type="submit" name="">
</form>

<?php

break;
}
}
?>
</center>
</body>
</html>