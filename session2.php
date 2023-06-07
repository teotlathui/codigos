<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
if(isset( $_SESSION["equipo"])){
// Echo session variables that were set on previous page
echo " El equipo es " . $_SESSION["equipo"] . ".<br>";
echo "integrante " . $_SESSION["integrante1"] . ".<br>";
echo "integrante" . $_SESSION["integrante2"] . ".<br>";
echo "integrante " . $_SESSION["integrante3"] . ".<br>";
echo "integrante " . $_SESSION["integrante4"] . ".<br>";
}
?>

</body>
</html>