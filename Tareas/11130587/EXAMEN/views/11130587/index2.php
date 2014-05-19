
    <?php session_start();
     
    echo 'Bienvenido!!';
     
    if (isset($_SESSION['k_username'])) {
        echo '<b>'.$_SESSION['k_username'].'</b>.';
        echo '<p><a href="http://localhost/PrograWeb2014/Tareas/11130587/EXAMEN/models/logout.php">Logout</a></p>';
    }else{
        echo '<p><a href="http://localhost/PrograWeb2014/Tareas/11130587/EXAMEN/views/11130587/login2.php">Login</a></p>
         <p><a href="http://localhost/PrograWeb2014/Tareas/11130587/EXAMEN/models/logout.php">Registrar</a></p>';
    }
    ?>
