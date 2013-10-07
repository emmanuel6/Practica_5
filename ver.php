<?php 
session_start();
if(!isset($_SESSION['codigo'])){
	header('Location: sesion.php');
}
?>
<!DOCTYPE HTML>
<html>
  <head>
   <link rel="stylesheet" href="Estilos.css" type="text/css"/>
  </head>
  <body>
  <center>
	  <fieldset style="width:550px;">
      <legend> <h2> Datos Registrados </h2> </legend> <br/>
	  
	
<?php
    
    $Nom = $_POST['txtNom'];
    $Tel = $_POST['txtTel'];
	$Cel = $_POST['txtCel'];
	$Dom = $_POST['txtDom'];
    
	
	echo "Nombre: ".$Nom."<br />";
	echo "Telefono: ".$Tel."<br />";
	echo "Celular: ".$Cel."<br />";
	echo "Domicilio: ".$Dom."<br />";
    
    ?>
	 </fieldset>
	 <a href="sesion.php"><h4>cerrar sesion</h4></a>
	 </center>
</body>
</html>