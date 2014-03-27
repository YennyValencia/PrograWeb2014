 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<title>Practica1 PHP</title>

</head>

       <body>

             <form method="GET" action="formulario.php">

             Nombre: <input type="text" name="nombre">

             <br/> <br/>

             Apellido: <input type="text" name="apellido">

             <br/> <br/>

             E-mail: <input type="text" name="email" >

             <br/> <br/>

             <input value="Enviar" type="submit" />

             </form>

             <br/> <br/>

             <div>
                  <table border='1'>
                  <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>E-mail</th>
            </tr>

                  <?php
                  if(isset($_GET['nombre'])):             
                        ?>
                  <tr>
                        <td><?php echo $_GET['nombre'];?></td>
                        <td><?php echo $_GET['apellido'];?></td>
                        <td><?php echo $_GET['email'];?></td>
                  </tr>


                <?php
                endif;           
                ?>
          </table>


       </div>

       </body>

</html>