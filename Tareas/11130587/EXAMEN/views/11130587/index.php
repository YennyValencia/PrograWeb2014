<?php define('BASEURL','http://localhost/PrograWeb2014/Tareas/11130587/EXAMEN'); ?>

<html>
<head><title>Login de usuarios</title>
</head>
<body>

<form action="<?php echo BASEURL; ?>/libs/login.php" method="POST">
Usuario: <input type="text" name="usuario"><br>
Password: <input type="password" name="pass"><br>
<input type="submit" value="Entrar">
</form>

¿No estás registrado? <a href="<?php echo BASEURL; ?>/views/11130587/registroU.php">Regístrate</a>.
</body>
</html>