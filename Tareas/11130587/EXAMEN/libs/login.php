<?php

$conexion = mysql_connect("localhost", "root", "root");

mysql_select_db("clase_pw", $conexion);

if($_POST['user'] && $_POST['pass']) 
{

     $sql="SELECT * FROM usuarios WHERE user='".$_POST['user']."' AND pass='".$_POST['pass']."'";

     $resultado=mysql_query($sql, $conexion) or die ("Error");

     $numRegistros=mysql_num_rows($resultado);

     if($numRegistros==0) 
     {

        echo "Error, no existen registros que coincidan con tu user y password";

     } 
     else 
     {

        echo "Login exitoso";
    }

} 
else 
{

   echo "Introduce user y password para loguearte";

}

?>