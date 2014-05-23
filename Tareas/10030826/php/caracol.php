
<?php
echo "<link href='cara.css' rel='stylesheet'>";
//echo "<div class='row'>";
//echo "<div class='container-fluid'>";
//echo "<div class='col-md-8 formulario'>";
echo "<FIELDSET id='espacio'>";
echo "<LEGEND>INGRESA DATOS:</LEGEND>";
echo "<form id='formulario'>";
            echo "<label id='dato'>Profundidad:</label>";
            echo "<input type='text'  name='dato1' id='dato1' required />";
            echo "<br>";
            echo "<label for='dato2' id='dato'>Sube:</label>";
            echo "<input type='text'  name='dato2' id='dato2' required />";
            echo "<br>";
            echo "<label for='dato3' id='dato'>Resbala:</label>";
            echo "<input type='text'  name='dato3' id='dato3' required />";
            echo "<br>";
            echo "<input type='submit' value='Aceptar' align='center' id='boton' />"; 
echo "</form>";
echo "</FIELDSET>";
//echo "</div>";
//echo "<div class='col-md-4 formulario'>";

          //  $dia='';
           
          //  if(isset($dia)
            //    echo $dia;

//echo "</div>";
//echo "</div>";
//echo "</div>";
echo "<FIELDSET id='espacio2'>";
echo "<LEGEND>DIAS EN SALIR:</LEGEND>";
echo "<form id='formulario'>";
echo "<label id='dato'>Dia: </label>";
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
echo "</FIELDSET>";
                         
     
?>