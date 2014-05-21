<?php
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../libs/ER.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Usuarios.php');
      include ('../layouts/header.php');
?>

<form class="form-horizontal" action="" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Registro</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">E-mail:</label>
  <div class="controls">
    <input id="email" name="email" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="username">Nombre de usuario:</label>
  <div class="controls">
    <input id="username" name="username" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label" for="password">Contraseña:</label>
  <div class="controls">
    <input id="password" name="password" placeholder="" class="input-xlarge" type="password">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="rfc">RFC:</label>
  <div class="controls">
    <input id="rfc" name="rfc" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cp">Código postal:</label>
  <div class="controls">
    <input id="cp" name="cp" placeholder="" class="input-xlarge" type="text">
    
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

      $usuario = new Usuarios();
      if(isset($_POST["email"])){
       
     $usuario->set_email($_POST["email"]);
     $usuario->set_username($_POST["username"]); 
     $usuario->set_password($_POST["password"]); 
     $usuario->set_rfc($_POST["rfc"]); 
     $usuario->set_cp($_POST["cp"]); 
     $usuario->inserta($usuario->get_atributos());
     
      }
       $rs = $usuario->consulta_datos();
       $usuario->show_grid('*', ' ','10');

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