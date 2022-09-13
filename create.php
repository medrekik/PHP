<html>
  <body>
    <button><a href=create.html>create</a></button>
    <table>
      <tr>
        <th>id</th>
        <th>designation</th>
        <th>prix</th>
        <th>quantite</th>
        <th></th>
        <th></th>
      </tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM article";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" .$row["id"]. "</td>";
        echo "<td>".$row["designation"]."</td>";
        echo "<td>".$row["prix"]."</td>";
        echo "<td>".$row["quantite"]."</td>";
        echo "</tr>";}
       
} 
else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
</body>
</html>