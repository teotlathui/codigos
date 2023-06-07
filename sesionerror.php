<?php
ini_set('display_errores',1);
session_start();

if (!isset($_SESSION["favcolor3"])){
    $_SESSION["favcolor3"] = "rojo";
    $_SESSION["favanimal3"] = "firefox";

}
else{
    echo "favorite color is " . $_SESSION["favcolor3"] . ".<br>";
    echo "favorite animal is " . $_SESSION["favanimal3"] . ".";

}
?>

