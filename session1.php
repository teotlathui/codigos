<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["equipo"] = "JAM";
$_SESSION["integrante1"] = "Abril Pacheco Hernandez";
$_SESSION["integrante2"] = "Shirley Ailin Leon Martin";
$_SESSION["integrante3"] = "Josue Teotlathui Morales Mulato";
$_SESSION["integrante4"] = "Marco Antonio Sanchez Contreras";
echo "Session inicializada.";
?>

</body>
</html>