<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <title>Compras por Internet PHP</title>
</head>
<body>
  <form method="GET" action="Form1-26Mar.php">

    Nombre: <input type="text" name="nombre">
    <br/> <br/>
    Apellido: <input type="text" name="apellido">
    <br> </br>
    Sexo: <input type="text" name="sexo" >
    <br/> <br/>
    Fecha de nacimiento: <input type="text" name="fecha" >
    <br/> <br/>
    E-mail: <input type="text" name="email" >
    <br/> <br/>
    Pa&iacutes: <input type="text" name="pais" >
    <br/> <br/>
    Estado: <input type="text" name="estado" >
    <br/> <br/>
    Ciudad: <input type="text" name="ciudad" >
    <br/> <br/>
    C&oacutedigo Postal: <input type="text" name="cp" >
    <br/> <br/>
    Tel&eacutefono: <input type="text" name="telefono" >
    <br/> <br/>
    <input value="Enviar" type="submit" />
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
</body>
</html>