<?php
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Historia.php');
      include ('../layouts/header.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-MX" lang="es-MX">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Historia Clínica con PHP</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!--     <link href="css/am.css" rel="stylesheet"> -->

<form class="form-horizontal" action="" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Historia Clínica con PHP</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="numero">Número de seguro:</label>
  <div class="controls">
    <input id="numero" name="numero" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nombre">Nombre:</label>
  <div class="controls">
    <input id="nombre" name="nombre" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="apellido">Apellido:</label>
  <div class="controls">
    <input id="apellido" name="apellido" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="sexo">Sexo:</label>
  <div class="controls">
    <input id="sexo" name="sexo" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="edad">Edad:</label>
  <div class="controls">
    <input id="edad" name="edad" placeholder="" class="input-xlarge" type="text">
    
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
  <label class="control-label" for="ocupacion">Ocupación:</label>
  <div class="controls">
    <input id="ocupacion" name="ocupacion" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="tipo">Tipo de sangre:</label>
  <div class="controls">
    <input id="tipo" name="tipo" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="peso">Peso:</label>
  <div class="controls">
    <input id="peso" name="peso" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="altura">Altura:</label>
  <div class="controls">
    <input id="altura" name="altura" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="enfermedades">Enfermedades crónicas:</label>
  <div class="controls">
    <input id="enfermedades" name="enfermedades" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="direccion">Dirección:</label>
  <div class="controls">
    <input id="direccion" name="direccion" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="telefono">Teléfono:</label>
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

      $historia = new Historia();
      if(isset($_POST["numero"])){
       
     $historia->set_numero($_POST["numero"]);
     $historia->set_nombre($_POST["nombre"]); 
     $historia->set_apellido($_POST["apellido"]); 
     $historia->set_sexo($_POST["sexo"]); 
     $historia->set_edad($_POST["edad"]); 
     $historia->set_fecha($_POST["fecha"]);
     $historia->set_ocupacion($_POST["ocupacion"]);
     $historia->set_tipo($_POST["tipo"]);
     $historia->set_peso($_POST["peso"]);
     $historia->set_altura($_POST["altura"]);
     $historia->set_enfermedades($_POST["enfermedades"]);
     $historia->set_direccion($_POST["direccion"]);
     $historia->set_telefono($_POST["telefono"]);
     $historia->inserta($historia->get_atributos());
     
      }
       $rs = $historia->consulta_datos();
       $historia->show_grid('*', ' ','10');

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