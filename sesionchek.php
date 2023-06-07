<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
        $token = $_SESSION["token"];
        if($token == "SI"){
            // Echo de otras variables de sesion
            // aqui se puede poner cualquier codigo 
            echo " si hay sesion y estos son los datos almacenados <br>";
            echo "un color:". $_SESSION["favcolor"] . " .<br>";
            echo"un animal: ". $_SESSION["favanimal"] . ".";
        } else{
            echo"no hay sesion activa;favor de logearse en el sistema";
        }
        ?>
        </body>
        </html>