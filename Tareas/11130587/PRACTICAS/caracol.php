<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es-MX" lang="es-MX">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Caracol con PHP</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!--     <link href="css/am.css" rel="stylesheet"> -->

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Caracol con PHP</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="dato1">Profundidad:</label>
  <div class="controls">
    <input id="dato1" name="dato1" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="dato2">Sube:</label>
  <div class="controls">
    <input id="dato2" name="dato2" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="dato3">Resbala:</label>
  <div class="controls">
    <input id="dato3" name="dato3" placeholder="" class="input-xlarge" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="boton"></label>
  <div class="controls">
    <button id="boton" name="boton" class="btn btn-primary">Aceptar</button>
  </div>
</div>



</fieldset>
</form>

<?php
echo "<link href='cara.css' rel='stylesheet'>";

if(isset($_REQUEST['dato1']))//al cargar la primera vez no contiene nada
   {
   $Profundidad=$_REQUEST['dato1'];
   $Sube=$_REQUEST['dato2'];
   $Resbala=$_REQUEST['dato3'];
   $dia='';
   $termina='';

   if($Profundidad>$Resbala)
      {
       if($Sube>=$Profundidad)
          {
            $dia++;
            echo $dia;
          }
          else
         {
          for ($i=0 ; $termina<$Profundidad ; $i++)
              {
                  $termina=$termina+$Sube;
                  if($termina < $Profundidad)
                     $termina=$termina-$Resbala;
                  $dia++;  
              }
              echo $dia;                       
          }
 
      } 
       else 
             echo "La profundidad es menor a los metros que resbala,verifique!!:) ";     
   }
echo "</form>";

                         
     
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>