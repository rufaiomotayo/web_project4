<?php
$servername = "localhost";
$username = "admin";
$password = "johnny";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

John. <br>

<?php
$servername = "localhost";
$username = "admin";
$password = "johnny";
$dbname = "gamedetails";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Title FROM gamedetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Title: " . $row["Title"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>