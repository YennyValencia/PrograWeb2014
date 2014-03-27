<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <title>Historia Cl&iacutenica PHP</title>
</head>
<body>
  <form method="GET" action="Form2-26Mar.php">

    N&uacutemero de seguro: <input type="text" name="numero">
    <br/> <br/>
    Nombre: <input type="text" name="nombre">
    <br/> <br/>
    Apellido: <input type="text" name="apellido">
    <br> </br>
    Sexo: <input type="text" name="sexo" >
    <br> </br>
    Edad: <input type="text" name="edad" >
    <br/> <br/>
    Fecha de nacimiento: <input type="text" name="fecha" >
    <br> </br>
    Ocupaci&oacuten: <input type="text" name="ocupacion" >
    <br> </br>
    Tipo de sangre: <input type="text" name="tipo" >
    <br> </br>
    Peso: <input type="text" name="peso" >
    <br> </br>
    Altura: <input type="text" name="altura" >  
    <br> </br>
    Alergias: <input type="text" name="alergias" >
    <br> </br>
    Enfermedades cr&oacutenicas: <input type="text" name="enfermedades" >
    <br/> <br/>
    Direcci&oacuten: <input type="text" name="direccion" >
    <br/> <br/>
    Tel&eacutefono: <input type="text" name="telefono" >
    <br/> <br/>
    <input value="Enviar" type="submit" />
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
</body>
</html>