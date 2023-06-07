<!DOCTYPE html>
<html>
<head>
<title>JAM</title>
<head>
<style>
 
table, th, td {
border:1px solid blue;
}
th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
</style>

<body>
<h1>JAM
</h1>
<table border="1">
  <thead>
  <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Rol</th>
      <th>Red Social</th>
      <th>Foto</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "respaldo";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

      $sql = "SELECT id, nombre, username, passwor  FROM usuario
      WHERE username=$usuario ";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["nombre"] . "</td>";
          echo "<td>" . $row["rol"] . "</td>";
          echo "<td> <a href=".$row["redsocial"].">perfil</a></td>";
          echo "<td><img src=" . $row["foto"]." height="."120px"."width="."120px"."/></td>";        
          //$foto = "basedatos/" . $row["foto"];
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='5'>0 results</td></tr>";
      }
      $conn->close();
    ?>
  </tbody>
</table>
</body>
</html>