<html>
    <head>
    </head>
    <body>
        <form action="Datos_medicos.php" method="GET">
            <label>Tipo de sangre</label>
            <input type="text" name="sangre">
            <label>Edad</label>
            <input type="number" name="edad">
            <label>Estatura</label>
            <input type="number" name="estatura">
            <label>Peso</label>
            <input type="number" name="peso">
            <label>Sexo</label>
            <input type="text" name="sexo">
            <label>Glucosa serica</label>
            <input type="number" name="glucosa">
            <label>Urea serica</label>
            <input type="number" name="urea">
            <label>Nitrogeno ureico serico</label>
            <input type="number" name="nitrogeno">
            <label>Creatinina serica</label>
            <input type="number" name="creatinina">
            <label>Acido urico serico</label>
            <input type="number" name="urico">
            <label>Colesterol total</label>
            <input type="number" name="colesterol">
            <label>Enfermedades respiratorias</label>
            <input type="text" name="respiratorias">
            <input type="submit" name="enviar">






        </form>

        <div>
            <table border="1">
                <tr>
                    <th>Tipo de sangre</th>
                    <th>Edad</th>
                    <th>Estatura</th>
                    <th>Peso</th>
                    <th>Glucosa</th>
                    <th>Urea</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>Codigo postal</th>
                    <th>Celular</th>
                    <th>RFC</th>

                </tr>
                <?php
                if (isset($_GET['sexo'])):
                    ?>
                    <tr>
                        <th><?php echo $_GET['sangre']; ?></th>
                        <th><?php echo $_GET['edad']; ?></th>
                        <th><?php echo $_GET['estatura']; ?></th>
                        <th><?php echo $_GET['peso']; ?></th>
                        <th><?php echo $_GET['glucosa']; ?></th>
                        <th><?php echo $_GET['urea']; ?></th>
                        <th><?php echo $_GET['nitrogeno']; ?></th>
                        <th><?php echo $_GET['creatinina']; ?></th>
                        <th><?php echo $_GET['urico']; ?></th>
                        <th><?php echo $_GET['colesterol']; ?></th>
                        <th><?php echo $_GET['respiratorias']; ?></th>
                    </tr>
                    <?php
                endif;
                ?>       
            </table>
        </div>
    </body>
</html>