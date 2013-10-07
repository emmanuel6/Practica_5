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
      <legend> <h2> Sesion iniciada </h2> </legend> <br/>
	  
	  <DIV ALIGN=left>
	  <center>
	<a href="sesion.php"><h4>cerrar sesion</h4></a>
   <div>
<form method="post" action="nuevo.php">
<br/>
      <br/>
      </DIV>

   <input type="submit" value="Nuevo" />

</form>

</div> 
</center>
     </fieldset>
	 
	 </center>     
 </body>
</html>