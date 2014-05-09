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

<form class="form-horizontal" method="GET" action="Form2v2-26Mar.php">
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
    <table border='1'>
      <tr>
        <th>N&uacutemero de seguro</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Sexo</th>
        <th>Edad</th>
        <th>Fecha de nacimiento</th>
        <th>Ocupaci&oacuten</th>
        <th>Tipo de sangre</th>
        <th>Peso</th>
        <th>Altura</th>
        <th>Alergias</th>
        <th>Enfermedades cr&oacutenicas</th>
        <th>Direcci&oacuten</th>
        <th>Tel&eacutefono</th>
        

      </tr>

      <?php
      if(isset($_GET['numero'])):
        ?>
      <tr>
        <td><?php echo $_GET['numero'];?></td>
        <td><?php echo $_GET['nombre'];?></td>
        <td><?php echo $_GET['apellido'];?></td>
        <td><?php echo $_GET['sexo'];?></td>
        <td><?php echo $_GET['edad'];?></td>
        <td><?php echo $_GET['fecha'];?></td>
        <td><?php echo $_GET['ocupacion'];?></td>
        <td><?php echo $_GET['tipo'];?></td>
        <td><?php echo $_GET['peso'];?></td>
        <td><?php echo $_GET['altura'];?></td>
        <td><?php echo $_GET['alergias'];?></td>
        <td><?php echo $_GET['enfermedades'];?></td>
        <td><?php echo $_GET['direccion'];?></td>
        <td><?php echo $_GET['telefono'];?></td>
      </tr>

      <?php
      endif;           
      ?>

    </table>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>