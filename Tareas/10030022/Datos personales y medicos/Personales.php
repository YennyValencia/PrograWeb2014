<html>
    <head>
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
       
        <form class="form-horizontal" method="GET">
            <fieldset>

                <!-- Form Name -->
                <legend>Datos personales</legend>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Nombre</label>
                    <div class="controls">
                        <input id="textinput" name="nombre" type="text" placeholder="placeholder" class="input-xlarge"><p></p>

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Apellido paterno</label>
                    <div class="controls">
                        <input id="textinput" name="paterno" type="text" placeholder="placeholder" class="input-xlarge"><p></p>

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Apellido materno</label>
                    <div class="controls">
                        <input id="textinput" name="materno" type="text" placeholder="placeholder" class="input-xlarge"><p></p>

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Edad</label>
                    <div class="controls">
                        <input id="textinput" name="edad" type="text" placeholder="placeholder" class="input-xlarge"><p></p>

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Sexo</label>
                    <div class="controls">
                        <input id="textinput" name="sexo" type="text" placeholder="placeholder" class="input-xlarge"><p></p>

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Fecha de nacimiento</label>
                    <div class="controls">
                        <input id="textinput" name="nacimiento" type="text" placeholder="placeholder" class="input-xlarge"><p></p>

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Telefono</label>
                    <div class="controls">
                        <input id="textinput" name="telefono" type="text" placeholder="placeholder" class="input-xlarge"><p></p>

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="direccion">Direccion</label>
                    <div class="controls">
                        <input id="textinput" name="direccion" type="text" placeholder="placeholder" class="input-xlarge"><p></p>

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Codigo postal</label>
                    <div class="controls">
                        <input id="textinput" name="codigo" type="text" placeholder="placeholder" class="input-xlarge"><p></p>

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">Celular</label>
                    <div class="controls">
                        <input id="textinput" name="celular" type="text" placeholder="placeholder" class="input-xlarge"><p></p>

                    </div>
                </div>

                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="textinput">RFC</label>
                    <div class="controls">
                        <input id="textinput" name="rfc" type="text" placeholder="placeholder" class="input-xlarge"><p></p>

                    </div>
                </div>

                <!-- Button -->
                <div class="control-group">
                    <div class="controls">
                        <button id="singlebutton" name="enviar" class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </div>
                
            </fieldset>
        </form>

        <div>
            <table border="1">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Fecha de nacimiento</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>Codigo postal</th>
                    <th>Celular</th>
                    <th>RFC</th>

                </tr>
                <?php
                if (isset($_GET['nombre'])):
                    ?>
                    <tr>
                        <th><?php echo $_GET['nombre']; ?></th>
                        <th><?php echo $_GET['paterno']; ?></th>
                        <th><?php echo $_GET['materno']; ?></th>
                        <th><?php echo $_GET['edad']; ?></th>
                        <th><?php echo $_GET['sexo']; ?></th>
                        <th><?php echo $_GET['nacimiento']; ?></th>
                        <th><?php echo $_GET['telefono']; ?></th>
                        <th><?php echo $_GET['direccion']; ?></th>
                        <th><?php echo $_GET['codigo']; ?></th>
                        <th><?php echo $_GET['celular']; ?></th>
                        <th><?php echo $_GET['rfc']; ?></th>
                    </tr>
                    <?php
                endif;
                ?>       
            </table>
        </div>

    </body>

</html>