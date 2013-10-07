<?php 
session_start();
if(!isset($_SESSION['codigo'])){
	header('Location: sesion.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="Estilos.css" type="text/css"/> 
    </head>
    <body>
	<center>
	  <fieldset style="width:550px;">
      <legend> <h2> Crear Nuevo Usuario </h2> </legend> <br/>
	  
	  <DIV ALIGN=left>
	<a href="sesion.php"><h4>cerrar sesion</h4></a>
   <div>
<form method="post" action="ver.php">

   <label for="txtNombre">Nombre</label><br/>
   <input type="text" size="40" maxlength="255"  name="txtNom"/>
   <br/>
   <br/>
   <label for="txtCorreo">Telefono</label><br/>
   <input type="text" size="40" maxlength="255"  name="txtTel"/>
   <br/>
   <br/>
  <label for="txtAsunto">Celular</label><br/>
   <input type="text" size="40" maxlength="255"  name="txtCel"/>
   <br/>
   <br/>
  <label for="txtAsunto">Domicilio</label><br/>
   <input type="text" size="40" maxlength="255" name="txtDom"/>
   <br/>
   <br/>
   <form method="post" action="ver.php">
   </DIV>
	   <center>
   <input type="submit" value="Guardar" />

</form>

</div> 
</center>
     </fieldset>
	 
	 </center>     
 </body>
</html>