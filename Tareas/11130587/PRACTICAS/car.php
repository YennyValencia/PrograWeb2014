 <?php 

       $profundidad = $_GET['profundidad'];

       $sube = $_GET['sube'];

       $resbala = $_GET['resbala'];

       $resultado = ($profundidad-$resbala);

       echo "<br/>   DATOS RECIBIDOS";

       echo "<br/>   Profundidad: ".$profundidad. " metros del agujero";

       echo "<br/>   Sube: ".$sube. " metros por el dia";

       echo "<br/>   Resbala: ".$resbala. " metros por la noche <br/>";

       echo "<br/>   Se tardo: ".$resultado. " dias en subir";

?>

