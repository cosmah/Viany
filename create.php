

<!doctype html>

<head>
    <meta charset="utf-8">
    <title>Add Contacts to Database </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
    form {
  width: 400px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="tel"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 3px;
  margin-bottom: 20px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 3px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}


    </style>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    
    
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
<h1>ADD CONTACT TO THE LIST</h1>
<form action="store.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>
    <label for="phone">Phone:</label>
    <input type="tel" name="phone" required><br><br>
    <input type="submit" value="Submit">
  </form>



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
