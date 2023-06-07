<?php
session_start();
ini_set('display_errores',1);
?>

<!DOCTYPE html>
<html>
    <body>
    <?php
    
        $usuario = $_POST ["user"];
        $contra = $_POST ["pass"];
       
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "respaldo";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
     $sql = ("SELECT id, nombre, username, passwor FROM usuarios
      WHERE username='$usuario'AND passwor='$contra'");
      $result = $conn->query($sql);

     if ($result->num_rows > 0) {
     $row=$result->fetch_assoc();  
        if ($usuario==$row["username"] && $contra==$row["passwor"])

{
    $_SESSION["favcolor"] ="Azul";
    $_SESSION["favanimal"] = "Gato";
    $_SESSION["token"] = "SI";

    echo "Se inicio sesion. ";
} else {
    $_SESSION["token"] = "NO";
    echo "contraseña incorrecta NO se inicio sesion.";
}
}else{
    echo "no existe el usuario";
}

?>

