<?php
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Compras.php');
      include ('../layouts/header.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-MX" lang="es-MX">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Compras por Internet con PHP</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!--     <link href="css/am.css" rel="stylesheet"> -->

<form class="form-horizontal" action="" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Compras por Internet con PHP</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nombre">Nombre:</label>
  <div class="controls">
    <input id="nombre" name="nombre" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="apellido">Apellido</label>
  <div class="controls">
    <input id="apellido" name="apellido" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="sexo">Sexo</label>
  <div class="controls">
    <input id="sexo" name="sexo" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="fecha">Fecha de nacimiento:</label>
  <div class="controls">
    <input id="fecha" name="fecha" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">E-mail:</label>
  <div class="controls">
    <input id="email" name="email" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="pais">País:</label>
  <div class="controls">
    <input id="pais" name="pais" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="estado">Estado:</label>
  <div class="controls">
    <input id="estado" name="estado" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="ciudad">Ciudad:</label>
  <div class="controls">
    <input id="ciudad" name="ciudad" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cp">Código Postal:</label>
  <div class="controls">
    <input id="cp" name="cp" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="telefono">Télefono:</label>
  <div class="controls">
    <input id="telefono" name="telefono" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="enviar"></label>
  <div class="controls">
    <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>

 <br/> <br/>
  <div>

      
      <?php

      $compras = new Compras();
      if(isset($_POST["nombre"])){
       
     $compras->set_nombre($_POST["nombre"]); 
     $compras->set_apellido($_POST["apellido"]); 
     $compras->set_sexo($_POST["sexo"]); 
     $compras->set_fecha($_POST["fecha"]);
     $compras->set_email($_POST["email"]);
     $compras->set_pais($_POST["pais"]);
     $compras->set_estado($_POST["estado"]);
     $compras->set_ciudad($_POST["ciudad"]);
     $compras->set_cp($_POST["cp"]);
     $compras->set_telefono($_POST["telefono"]);
     $compras->inserta($compras->get_atributos());
     
      }
       $rs = $compras->consulta_datos();
       $compras->show_grid('*', ' ','10');

      ?>

    
  </div>
 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>


<?php
  include ('../layouts/footer.php');
?>