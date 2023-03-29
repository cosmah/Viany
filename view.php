<!doctype html>

<head>
    <meta charset="utf-8">
    	<title>Contacts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    			table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #F2F2F2;
}

tr:hover {
  background-color: #f5f5f5;
}

    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}

    </style>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<br/>
	<br/>
	<br/>
	<h1>Contacts List</h1>
    <?php

// Connect to MySQL database using PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vian";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Retrieve data from "contacts" table
$stmt = $conn->prepare("SELECT * FROM contacts");
$stmt->execute();
$result = $stmt->fetchAll();

// Display data in HTML table
echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Phone</th></tr>";
foreach ($result as $row) {
	echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td></tr>";
}
echo "</table>";

$conn = null; // Close database connection

?>
    
    <!-- Navbar -->
<div class="w3-top">
   <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="create.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Add Contacts</a>
    <a href="update.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Update Contacts</a>
    <a href="view.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">View Contacts</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Log Out</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="create.php" class="w3-bar-item w3-button w3-padding-large">Add Contacts</a>
    <a href="update.php" class="w3-bar-item w3-button w3-padding-large">Update Contacts</a>
    <a href="view.php" class="w3-bar-item w3-button w3-padding-large">View Contacts</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Log Out</a>
  </div>
</div>
<br/>
<br>


<footer class="w3-container w3-center w3-padding-48 w3-margin-top">
        &copy Vian's Contact Manager, 2023 
      <!-- End footer -->
      </footer>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
 
</body>
</html>
