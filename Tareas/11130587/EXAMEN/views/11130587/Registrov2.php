<?php
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../libs/ER.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Usuarios2.php');
      include ('../layouts/header.php');
?>

<form class="form-horizontal" action="" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Registrov2</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nombre">Nombre:</label>
  <div class="controls">
    <input id="nombre" name="nombre" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="curp">Curp</label>
  <div class="controls">
    <input id="curp" name="curp" placeholder="" class="input-xlarge" type="text">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="telefono">Télefono:</label>
  <div class="controls">
    <input id="telefono" name="telefono" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="tarjeta">Número de tarjeta (bancaria):</label>
  <div class="controls">
    <input id="tarjeta" name="tarjeta" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="fecha">Fecha de hoy:</label>
  <div class="controls">
    <input id="fecha" name="fecha" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="hora">Hora actual:</label>
  <div class="controls">
    <input id="hora" name="hora" placeholder="" class="input-xlarge" type="text">
    
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


<?php

      $u2 = new Usuarios2();
      if(isset($_POST["nombre"])){
       
     $u2->set_nombre($_POST["nombre"]); 
     $u2->set_curp($_POST["curp"]); 
     $u2->set_telefono($_POST["telefono"]); 
     $u2->set_tarjeta($_POST["tarjeta"]); 
     $u2->set_fecha($_POST["fecha"]); 
     $u2->set_hora($_POST["hora"]); 
     $u2->inserta($u2->get_atributos());
     
      }
       $rs = $u2->consulta_datos();
       $u2->show_grid('*', ' ','10');

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