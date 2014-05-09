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

<form class="form-horizontal" method="GET" action="Form1v2-26Mar.php">
<fieldset>

<!-- Form Name -->
<legend>Compras por Internetcon PHP</legend>

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
    <table border='1'>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Sexo</th>
        <th>Fecha de nacimiento</th>
        <th>E-mail</th>
        <th>Pa&iacutes</th>
        <th>Estado</th>
        <th>Ciudad</th>
        <th>C&oacutedigo Postal</th>
        <th>Tel&eacutefono</th>
      </tr>

      <?php
      if(isset($_GET['nombre'])):
        ?>
      <tr>
        <td><?php echo $_GET['nombre'];?></td>
        <td><?php echo $_GET['apellido'];?></td>
        <td><?php echo $_GET['sexo'];?></td>
        <td><?php echo $_GET['fecha'];?></td>
        <td><?php echo $_GET['email'];?></td>
        <td><?php echo $_GET['pais'];?></td>
        <td><?php echo $_GET['estado'];?></td>
        <td><?php echo $_GET['ciudad'];?></td>
        <td><?php echo $_GET['cp'];?></td>
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