<?php 

include ("con_db.php");

if (isset ($_POST ['register'])){
    if (strlen ($_POST ['name']) >= 1 && strlen ($_POST ['email']) >=1 ){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $fechareg = trim($_POST['d/m/y']);
    $consulta = "INSERT INTO registro (nombre, email, fechareg) VALUES ('$name', '$email', '$fechareg' ) ";
    $resultado = mysql_query($conex, $consulta);
    if ($resultado) {
    ?>
    <h3 class= "Registro">Te has registrado correctamente!</h3>
    <?php
        } else {
            ?>
            <h3 class="error">¡Ups ha ocurrido un error!</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Por favor complete los campos</h3>
        <?php
    }
}


?>