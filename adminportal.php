<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>GameStore</title>
	<link href="project4.css" type="text/css" rel="stylesheet" />
</head>

<body>

<ul class="navbar">
  <li><a href="logout.php">Logout</a>
</ul>

	<h1>GameStore</h1>
	<div class = "container2">
	
	<div class = "favlist fill">
	<div class="card">
	Oldest Game
		<img src="game6.jpg" alt="Avatar">
		<div class="cardcontainer">
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

		$sql = "SELECT Title FROM gamedetails HAVING MIN(Year)";
		$result = $conn->query($sql);

		if ($result = $conn->query($sql)) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$field1name = $row["Title"];
		}
		} else {
		echo "0 results";
		}
		echo "Title: " . $field1name . "<br>";
		
		$conn->close();
		?> 
		</div>
	</div>
	</div>
	
	<div class = "favlist fill">
	<div class="card">
	Most Players
		<img src="game6.jpg" alt="Avatar">
		<div class="cardcontainer">
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

		$sql = "SELECT Title FROM gamedetails HAVING MAX(Number_Of_Players)";
		$result = $conn->query($sql);

		if ($result = $conn->query($sql)) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$field1name = $row["Title"];
		}
		} else {
		echo "0 results";
		}
		echo "Title: " . $field1name . "<br>";
		
		$conn->close();
		?> 
		</div>
	</div>
	</div>
	
	
	<div class = "favlist fill">
	Even though this shouldn't necessarily be in divs. Here's where we list info from the DB.
	</div>
	
	<div class = "favlist">
	Even though this shouldn't necessarily be in divs. Here's where we list info from the DB.
	</div>
	
	<div class = "favlist">
	Even though this shouldn't necessarily be in divs. Here's where we list info from the DB.
	</div>

	
	
	<div class = "favlist">
	Even though this shouldn't necessarily be in divs. Here's where we list info from the DB.
	</div>
	
	
	
	
	
	
	
	</div>
</body>

</html>