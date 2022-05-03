<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>GameStore</title>
	<link href="project4.css" type="text/css" rel="stylesheet" />
</head>

<body>

<div class="topnav">
  <a href="logout.php">Logout</a>
  <div class="search-container">
    <form action="REPLACETHIS.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

	<h1>GameStore Selling</h1>
	<div class = "container2">
	
	<div class = "favlist fill">
	<div class="card">
		<img src="game1.jpg" alt="Avatar">
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

		$sql = "SELECT Title, Year, Rating, Number_Of_Players FROM gamedetails WHERE Title = 'God of War 4'";
		$result = $conn->query($sql);

		if ($result = $conn->query($sql)) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$field1name = $row["Title"];
			$field2name = $row["Year"];
			$field3name = $row["Rating"];
			$field4name = $row["Number_Of_Players"];
		}
		} else {
		echo "0 results";
		}
		echo "Title: " . $field1name . "<br>";
		echo "Year: " . $field2name . "<br>";
		echo "Rating: " . $field3name . "<br>";
		echo "Number_Of_Players: " . $field4name . "<br>";
		
		$conn->close();
		?> 
		</div>
	</div>
	</div>
	
	<div class = "favlist fill">
	<div class="card">
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

		$sql = "SELECT Title, Year, Rating, Number_Of_Players FROM gamedetails WHERE Title = 'Ninja Gaiden'";
		$result = $conn->query($sql);

		if ($result = $conn->query($sql)) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$field1name = $row["Title"];
			$field2name = $row["Year"];
			$field3name = $row["Rating"];
			$field4name = $row["Number_Of_Players"];
		}
		} else {
		echo "0 results";
		}
		echo "Title: " . $field1name . "<br>";
		echo "Year: " . $field2name . "<br>";
		echo "Rating: " . $field3name . "<br>";
		echo "Number_Of_Players: " . $field4name . "<br>";
		
		$conn->close();
		?> 
		</div>
	</div>
	</div>
	
	
	<div class = "favlist fill">
	<div class="card">
		<img src="game3.jpg" alt="Avatar">
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

		$sql = "SELECT Title, Year, Rating, Number_Of_Players FROM gamedetails WHERE Title = 'Halo 3'";
		$result = $conn->query($sql);

		if ($result = $conn->query($sql)) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$field1name = $row["Title"];
			$field2name = $row["Year"];
			$field3name = $row["Rating"];
			$field4name = $row["Number_Of_Players"];
		}
		} else {
		echo "0 results";
		}
		echo "Title: " . $field1name . "<br>";
		echo "Year: " . $field2name . "<br>";
		echo "Rating: " . $field3name . "<br>";
		echo "Number_Of_Players: " . $field4name . "<br>";
		
		$conn->close();
		?> 
		</div>
	</div>
	</div>
	
	<div class = "favlist fill">
	<div class="card">
		<img src="game4.jpg" alt="Avatar">
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

		$sql = "SELECT Title, Year, Rating, Number_Of_Players FROM gamedetails WHERE Title = 'Kingdom Hearts 3'";
		$result = $conn->query($sql);

		if ($result = $conn->query($sql)) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$field1name = $row["Title"];
			$field2name = $row["Year"];
			$field3name = $row["Rating"];
			$field4name = $row["Number_Of_Players"];
		}
		} else {
		echo "0 results";
		}
		echo "Title: " . $field1name . "<br>";
		echo "Year: " . $field2name . "<br>";
		echo "Rating: " . $field3name . "<br>";
		echo "Number_Of_Players: " . $field4name . "<br>";
		
		$conn->close();
		?> 
		</div>
	</div>
	</div>
	
	<div class = "favlist fill">
	<div class="card">
		<img src="game7.jpg" alt="Avatar">
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

		$sql = "SELECT Title, Year, Rating, Number_Of_Players FROM gamedetails WHERE Title = 'Ratchet and Clank'";
		$result = $conn->query($sql);

		if ($result = $conn->query($sql)) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$field1name = $row["Title"];
			$field2name = $row["Year"];
			$field3name = $row["Rating"];
			$field4name = $row["Number_Of_Players"];
		}
		} else {
		echo "0 results";
		}
		echo "Title: " . $field1name . "<br>";
		echo "Year: " . $field2name . "<br>";
		echo "Rating: " . $field3name . "<br>";
		echo "Number_Of_Players: " . $field4name . "<br>";
		
		$conn->close();
		?> 
		</div>
	</div>
	</div>

	
	
	<div class = "favlist fill">
	<div class="card">
		<img src="game8.jpg" alt="Avatar">
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

		$sql = "SELECT Title, Year, Rating, Number_Of_Players FROM gamedetails WHERE Title = 'Outwards'";
		$result = $conn->query($sql);

		if ($result = $conn->query($sql)) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$field1name = $row["Title"];
			$field2name = $row["Year"];
			$field3name = $row["Rating"];
			$field4name = $row["Number_Of_Players"];
		}
		} else {
		echo "0 results";
		}
		echo "Title: " . $field1name . "<br>";
		echo "Year: " . $field2name . "<br>";
		echo "Rating: " . $field3name . "<br>";
		echo "Number_Of_Players: " . $field4name . "<br>";
		
		$conn->close();
		?> 
		</div>
	</div>
	</div>
	
	
	
	
	
	
	
	</div>
</body>

</html>